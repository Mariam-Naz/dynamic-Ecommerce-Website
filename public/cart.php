<?php require_once('../resources/config.php'); ?>
<?php 
if(isset($_GET['add'])){

    $query = query("SELECT * FROM products WHERE product_id=" . escape($_GET['add']). "");
    confirm($query);
    
    while($row = mysqli_fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){
            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("checkout.php");
        } else {
            set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
            redirect("checkout.php");
        }
    }
}
if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']] < 1){
        unset($_SESSION['item_total']);
        unset($_SESSION['quantity_total']);
        redirect('checkout.php');
    }else{
        redirect('checkout.php');
    }
}
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['quantity_total']);
    redirect('checkout.php');
}
$pro_id = array();
function cart(){

    $total = 0;
    $total_items = 0;

    foreach ($_SESSION as $name => $value) {
        if($value > 0){
            if(substr($name,0, 8) == "product_"){
                $length = strlen($name)- 8;
                echo 'len ' . $length;
                $id = substr($name, 8, $length);
                echo 'id ' . $id;
                global $pro_id;
                array_push($pro_id,$id);
                foreach($pro_id as $pid){
                    echo "my id: " . $pid;
                }
                $query = query("SELECT * FROM products WHERE product_id = " . escape($id) . " ");
                confirm($query);
              
        while($row = mysqli_fetch_array($query)){
            $sub = $row['product_price'] * $value;
           
            $product = <<<DELIMETER
            <tr>
                    <td>{$row['product_title']}</td>
                    <td>Rs.{$row['product_price']}/-</td>
                    <td>{$value}</td>
                    <td>{$sub}</td>
                    <td><a class='btn btn-warning' href="cart.php?remove={$row['product_id']}"><span class = 'glyphicon glyphicon-minus'></span></a>
                    <a class='btn btn-success' href="cart.php?add={$row['product_id']}"><span class = 'glyphicon glyphicon-plus'></span></a>
                    <a class='btn btn-danger' href="cart.php?delete={$row['product_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
            </tr>
            
        DELIMETER;
        $_SESSION['individual_quant'] = $value;
        echo $product;
        }
        $item_total = $total += $sub;
        $_SESSION['item_total'] = $total += $sub;
        
        $_SESSION['quantity_total'] = $total_items += $value;
            }   
        }
        
    }
}
foreach($pro_id as $pid){
    echo "my id: " . $pid;
}
function order($amount, $quant){
    global $pro_id;
    foreach ($pro_id as $pid){
        echo "<script>console.log('fhdgfhg')</script>";
    if(isset($_POST['submit'])){
        $query = query("INSERT INTO orders(product_order_id,order_quantity,order_date,order_status,order_amount) VALUES('$pid' , '$quant', '7-9-2020', 'complete','$amount')");
        confirm($query);
        echo "<script>console.log('$pid')</script>";
       }
    //  $query = query("INSERT INTO orders(product_order_id,order_quantity,order_date,order_status,order_amount) VALUES('$pro_id[1]' , '$quant', '7-9-2020', 'complete','$amount')");

}
}

?>