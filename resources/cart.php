<?php require_once('config.php'); ?>
<?php 
if(isset($_GET['add'])){

    $query = query("SELECT * FROM products WHERE product_id=" . escape($_GET['add']). "");
    confirm($query);
    
    while($row = mysqli_fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){
            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("../public/checkout.php");
        } else {
            set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
            redirect("../public/checkout.php");
        }
    }
}
if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']] < 1){
        unset($_SESSION['item_total']);
        unset($_SESSION['quantity_total']);
        redirect('../public/checkout.php');
    }else{
        redirect('../public/checkout.php');
    }
}
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['quantity_total']);
    redirect('../public/checkout.php');
}

function cart(){

    $total = 0;
    $total_items = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;
    foreach ($_SESSION as $name => $value) {
        if($value > 0){
            if(substr($name,0, 8) == "product_"){
                $length = strlen($name)- 8;
                $id = substr($name, 8, $length);
                $query = query("SELECT * FROM products WHERE product_id = " . escape($id) . " ");
                confirm($query);
              
        while($row = mysqli_fetch_array($query)){
            $sub = $row['product_price'] * $value;
            $_SESSION['product_title'] = $row['product_title'];
            $item_quantity += $value; 
            $product = <<<DELIMETER
            <tr>
                    <td>{$row['product_title']}<br>
                   <img style="width: 100px" src=../resources/uploads/{$row['product_image']} alt={$row['product_title']} style="width: 320px; height: 170px;"></td>
                    <td>Rs.{$row['product_price']}/-</td>
                    <td>{$value}</td>
                    <td>{$sub}</td>
                    <td><a class='btn btn-warning' href="../resources/cart.php?remove={$row['product_id']}"><span class = 'glyphicon glyphicon-minus'></span></a>
                    <a class='btn btn-success' href="../resources/cart.php?add={$row['product_id']}"><span class = 'glyphicon glyphicon-plus'></span></a>
                    <a class='btn btn-danger' href="../resources/cart.php?delete={$row['product_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
            </tr>
            
            <input type="hidden" name="item_name_{$item_name}" value="hat">
            <input type="hidden" name="item_number_{$item_number}" value="hat">
            <input type="hidden" name="amount_{$amount}" value="15000">
            <input type="hidden" name="quantity_{$quantity}" value="5">

        DELIMETER;
        $_SESSION['individual_quant'] = $value;
        echo $product;

        $item_name++;
        $item_number++;
        $amount++;
        $quantity++;
        }
        $_SESSION['item_total'] = $total += $sub;
        $_SESSION['quantity_total'] = $total_items += $value;
        $_SESSION['item_quantity'] = $item_quantity;
            }   
        }
        
    }
}

function showBuyButton(){
    if(isset($_SESSION['item_quantity'])){
    $buy_button = <<<DELIMETER
    <button type='submit' name='submit' class="btn-buy"><span>BUY NOW!</span></button>
    DELIMETER;
    return $buy_button;
    }
}


function orders(){
    $total = 0;
    $item_quantity = 0;
    foreach ($_SESSION as $name => $value) {
        if($value > 0){
            if(substr($name,0, 8) == "product_"){
                $length = strlen($name)- 8;
                $id = substr($name, 8, $length);
                echo "id: " . $id;
                $query = query("SELECT * FROM products WHERE product_id = " . escape($id) . " ");
                confirm($query);
              
        while($row = mysqli_fetch_array($query)){
            $product_price = $row['product_price'];
            $product_title = $row['product_title'];
            $product_img = $row['product_image'];
            $sub = $row['product_price'] * $value;
            $item_quantity += $value; 
           
            $insert_orders = query("INSERT INTO orders(product_id, username, product_price, product_title, product_quantity , product_img) VALUES('{$id}', '{$_SESSION['reg_user']}' , '{$sub}' , '{$product_title}' , '{$value}' , '{$product_img}' )");
            confirm($insert_orders);
        }
        $total += $sub;
        echo "quantity: " . $item_quantity;
            }   
        }
        
    }
}
?>