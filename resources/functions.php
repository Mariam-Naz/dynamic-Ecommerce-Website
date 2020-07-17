<?php
    
    function set_message($msg){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else{
            $msg = "";
        }
    }

    function display_message(){
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }
    
    function redirect($location){
        header("Location: $location");
    }

    function query($sql){
        global $connection;
        return mysqli_query($connection,$sql);
    }

    function confirm($result){
        global $connection;
        if(!$result){
            die('Query failed' + mysqli_error($connection));
        }
    }

    function escape($string)
    {
        global $connection;
        return mysqli_real_escape_string($connection,$string);
    }
// ********************************** FRONT END *****************************************************************************
    function get_products(){
        $query = query('SELECT * FROM products');
        confirm($query);

        while($row = mysqli_fetch_array($query)){
            $desc = $row['product_description'];
            $sub_desc = substr($desc,0,100);
            $product = <<< DELIMETER

<div class="col-sm-12 col-lg-4 col-md-4">
<div class="cust-thumb">
<div class="thumbnail">

<a href='item.php?id={$row['product_id']}'><img src=$row[product_image] alt=""></a>
<div class="caption">
    <h4 class="pull-right">Rs. $row[product_price]</h4>
    
    <h4><a href="item.php?id={$row['product_id']}">$row[product_title]</a>
    </h4>
    <p>$sub_desc ...<a href='item.php'> Read more</a></p>
   <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">ADD TO CART</a>
</div>
</div>
</div>
</div>

DELIMETER;
echo $product;
        }

    }

    function get_categories(){
        $query = query('SELECT * FROM categories');
        confirm($query);

        while($row = mysqli_fetch_array($query)){
            $categoryLinks = <<< DELIMETER
<li class="dropdown-link"><a href="category.php?id={$row['cat_id']}">$row[cat_title]</a></li>
DELIMETER;
echo $categoryLinks;
        }
    }

    function goto_category(){
        $query = query("SELECT * FROM products WHERE product_category_id = ". escape($_GET['id']) ."");
        confirm($query);

        while($row = mysqli_fetch_array($query)){
            $desc = $row['product_description'];
            $sub_desc = substr($desc,0,100);
            $product = <<< DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img style="width: 320px; height: 170px;" src= $row[product_image] alt="">
                <div class="caption">
                    <h3>$row[product_title]</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

DELIMETER;
echo $product;
        }

    }

    function goto_shop(){
        $query = query("SELECT * FROM products");
        confirm($query);

        while($row = mysqli_fetch_array($query)){
            $product = <<< DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class='img-size' src= $row[product_image] alt="">
                <div class="caption">
                    <h3>$row[product_title]</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

    DELIMETER;
echo $product;
        }

    }

function login_user(){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
        confirm($query);
        if(mysqli_num_rows($query) == 0){
            set_message("Invalid Username Or Password");
            redirect('login.php');
        }
        else{
            set_message("Welcome {$username}");
            redirect('admin');
        }
    }
}

function send_message(){
    if(isset($_POST['submit'])){
        $to        = "mariamnaz212@gmail.com";
        $from_name = $_POST['name'];
        $subject   = $_POST['subject'];
        $email     = $_POST['email'];
        $message   = $_POST['message'];

        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message, $headers);

        if(!$result){
            echo "ERROR";
        }else{
            echo "SENT";
        }
    }

}



// ********************************** BACK END *****************************************************************************

function displayOrders(){
    $query = query("SELECT * FROM orders");
    confirm($query);

    while($row = mysqli_fetch_array($query)){
        
        
            // $query = query("DELETE FROM orders WHERE order_id = ". escape($_GET['id']) ."");
            // confirm($query);
        $orders = <<<DELIMETER
        <tr>
        <td>{$row['order_id']}</td>
        <td>{$row['product_title']}</td>
        <td> <img style="height:62px; width:62px;" src= {$row['product_img']} alt="img"></td>
        <td>{$row['product_quantity']}</td>
        <td>{$row['product_price']}</td>
        <td><a class='btn btn-danger' href="../../resources/templates/back/delete.php?id={$row['order_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
        </tr>
        DELIMETER;
        echo $orders;
    }
   
}

function displayProducts(){

    $query = query('SELECT product_id, product_title, product_image, product_price, product_quantity, cat_title FROM products INNER JOIN categories ON product_category_id = cat_id');
    confirm($query);

    while($row = mysqli_fetch_array($query)){
       
        $product = <<< DELIMETER
        <tr>
        <td>{$row['product_id']}</td>
        <td>{$row['product_title']}<br>
        <a href = 'index.php?edit_product&id={$row['product_id']}'><img src={$row['product_image']} alt={$row['product_title']} style="width: 320px; height: 170px;"></a>
        </td>
        <td>{$row['cat_title']}</td>
        <td>{$row['product_price']}</td>
        <td>{$row['product_quantity']}</td>
        <td><a class='btn btn-danger' href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
        </tr>
        DELIMETER;
        echo $product;
            }

}

function addProducts(){

    if(isset($_POST['publish'])){
        $_SESSION['product_category_id']= 0;
        $product_title = escape($_POST['product_title']);
        $product_description = escape($_POST['product_description']);
        $product_price = escape($_POST['product_price']);
        $product_category = $_POST['product_category'];
        $product_category_query = query("SELECT * FROM categories WHERE cat_title=$product_category");
        confirm($product_category_query);
        while($row = mysqli_fetch_array($product_category_query)){
            $_SESSION['product_category_id'] = $row['cat_id'];
        }
        $product_category_id = $_SESSION['product_category_id'];
        $product_quantity = escape($_POST['product_quantity']);
        $product_image = escape($_FILES['file']['name']);
        $product_image_location = escape($_FILES['file']['tmp_name']);
       
        move_uploaded_file($product_image_location , UPLOAD_DIR . DS . $product_image);
        $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_quantity, product_description, product_image) VALUES('{$product_title}' , '{$product_category_id}' , '{$product_price}' , '{$product_quantity}' , '{$product_description}' , '{$product_image}')" );
        confirm($query);
        redirect('index.php?products');
    }
}

?>