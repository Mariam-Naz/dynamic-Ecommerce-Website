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
        redirect('checkout.php');
    }else{
        redirect('checkout.php');
    }
}
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0';
    redirect('checkout.php');
}

function cart(){

    foreach ($_SESSION as $name => $value) {
        if($value > 0){
            if(substr($name,0, 8) == "product_"){
                $length = strlen($name)- 8;
                $id = substr($name, 8, $length);
                $query = query("SELECT * FROM products WHERE product_id = " . escape($id) . " ");
                confirm($query);
    
        while($row = mysqli_fetch_array($query)){
            $product = <<<DELIMETER
            <tr>
                    <td>{$row['product_title']}</td>
                    <td>$23</td>
                    <td>3</td>
                    <td>2</td>
                    <td><a class='btn btn-warning' href="cart.php?remove={$row['product_id']}"><span class = 'glyphicon glyphicon-minus'></span></a>
                    <a class='btn btn-success' href="cart.php?add={$row['product_id']}"><span class = 'glyphicon glyphicon-plus'></span></a>
                    <a class='btn btn-danger' href="cart.php?delete={$row['product_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
                  
                </tr>
        DELIMETER;
        echo $product;
        }
    
            }   
        }
    }
}
?>