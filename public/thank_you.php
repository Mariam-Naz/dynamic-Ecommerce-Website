<?php require_once('../resources/config.php');

$payment_id = $statusMsg = '';
$ordStatus = 'error';

// Check whether stripe checkout session is not empty 
if (!empty($_GET['session_id'])) {
    $session_id = $_GET['session_id'];

    // Fetch transaction data from the database if already exists 
    $result= query("SELECT * FROM orders WHERE checkout_session_id = '" . $session_id . "'");
    confirm($result);
    if (mysqli_num_rows($result) > 0) {
        $orderData = $result->fetch_assoc();

        $paymentID = $orderData['id'];
        $transactionID = $orderData['txn_id'];
        $paidAmount = $orderData['paid_amount'];
        $paidCurrency = $orderData['paid_amount_currency'];
        $paymentStatus = $orderData['payment_status'];

        $ordStatus = 'success';
        $statusMsg = 'Your Payment has been Successful!';
    } else {
        require_once '../vendor/stripe/stripe-php/init.php';
        // Set API key 
        \Stripe\Stripe::setApiKey("sk_test_51JIDOpFGanmcY1khThapV2V9zQqyeORfYxhlDD6dB5ab9hkxgCHvYwfEiSQ4NcR7kyPTBPmPgPKaQF7Ul9uRUDm2007B1SS8Hk"); 
        try {
            $checkout_session = \Stripe\Checkout\Session::retrieve($session_id);
        } catch (Exception $e) {
            $api_error = $e->getMessage();
        }

        if (empty($api_error) && $checkout_session) {
            // Retrieve the details of a PaymentIntent 
            try {
                $intent = \Stripe\PaymentIntent::retrieve($checkout_session->payment_intent);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }

            // Retrieves the details of customer 
            try {
                // Create the PaymentIntent 
                $customer = \Stripe\Customer::retrieve($checkout_session->customer);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }

            if (empty($api_error) && $intent) {
                // Check whether the charge is successful 
                if ($intent->status == 'succeeded') {
                    // Customer details 
                    $name = $customer->name;
                    $email = $customer->email;

                    // Transaction details  
                    $transactionID = $intent->id;
                    $paidAmount = $intent->amount;
                    $paidAmount = ($paidAmount / 100);
                    $paidCurrency = $intent->currency;
                    $paymentStatus = $intent->status;

                    // Insert transaction data into the database 
                    $sql = query("INSERT INTO orders(name,email,item_name,item_price,item_price_currency, quantity, paid_amount,paid_amount_currency,txn_id,payment_status,checkout_session_id,created,modified) VALUES('" . $name . "','" . $email . "','" . $_SESSION['product_name'] . "','" . $_SESSION['unit_amounts'] * 100 . "','" .'pkr' ."','" . $_SESSION['quantity_total'] . "','" . $paidAmount . "','" . $paidCurrency . "','" . $transactionID . "','" . $paymentStatus . "','" . $session_id . "',NOW(),NOW())");
                  confirm($sql);
                    $paymentID = mysqlInsertId();
                    // echo $paymentID; die;
                    // If the order is successful 
                    if ($paymentStatus == 'succeeded') {
                        $statusMsg = 'Your Payment has been Successful!';
                    } else {
                        $statusMsg = "Your Payment has failed!";
                    }
                } else {
                    $statusMsg = "Transaction has been failed!";
                }
            } else {
                $statusMsg = "Unable to fetch the transaction details! $api_error";
            }

            $ordStatus = 'success';
        } else {
            $statusMsg = "Transaction has been failed! $api_error";
        }
    }
} else {
    $statusMsg = "Invalid Request!";
}
?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Stripe Payment Status - CodexWorld</title>
    <meta charset="utf-8">

    <!-- Stylesheet file -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="status">
            <h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>
            <?php if ( $statusMsg === 'Your Payment has been Successful!') { ?>
                <h4>Payment Information</h4>
                <p><b>Reference Number:</b> <?php echo $paymentID; ?></p>
                <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
                <p><b>Paid Amount:</b> <?php echo $paidAmount . ' ' . $paidCurrency; ?></p>
                <p><b>Payment Status:</b> <?php echo $paymentStatus; ?></p>

                <h4>Product Information</h4>
                <p><b>Name:</b> <?php echo $_SESSION['product_name']; ?></p>
                <p><b>Price:</b> <?php echo $_SESSION['unit_amounts'].' ' . "pkr"; ?></p>
            <?php } ?>
        </div>
        <a href="../index.php" class="btn-link">Back to Product Page</a>
    </div>
</body>

</html>
<?php session_destroy(); ?>