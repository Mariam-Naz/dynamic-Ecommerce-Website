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
    $product = <<< DELIMETER
    <div class="col-sm-12 col-lg-4 col-md-4">
    <div class="card-deck">
    <div class='card'>
    <a href='item.php?id={$row['product_id']}'><img  class="card-img-top" style="width: 100%; height: 170px;"  src=../resources/uploads/$row[product_image] alt="$row[product_title]"></a>
    <div class="card-body">
    <h4 class='card-title'><a href="item.php?id={$row['product_id']}">$row[product_title]</a></h4>
    <h4  class="card-text"><small class="text-muted">Rs. $row[product_price]</small></h4>
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
    <div class="col-md-3 col-sm-12">
    <div class="card-deck">
    <div class='card'>
    <a href='item.php?id={$row['product_id']}'><img  class="card-img-top" style="width: 100%; height: 170px;"  src=../resources/uploads/$row[product_image] alt="$row[product_title]"></a>
    <div class="card-body">
    <h4 class='card-title'><a href="item.php?id={$row['product_id']}">$row[product_title]</a></h4>
    <p class="card-text">$sub_desc <a href="item.php?id={$row['product_id']}">Read more...</a></p>
    <h4  class="card-text"><small class="text-muted">Rs. $row[product_price]</small></h4>
   <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">ADD TO CART</a>
    </div>
    </div>
    </div>
    </div>
DELIMETER;
echo $product;
    }

}

function showCategoryName(){
    $query = query("SELECT * FROM categories WHERE cat_id = ". escape($_GET['id']) ."");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
        echo $row['cat_title'];
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

function showSliderInFront(){
    $slider_sql = query("SELECT * FROM slider limit 1");
        confirm($slider_sql);
        while($slider_row=mysqli_fetch_array($slider_sql)){
          echo "<div class='item active' data-wrap='true' data-interval='1000'>
          <img class= 'slide-image' style='width:1500px; height:450px;' src='../resources/slider-imgs/$slider_row[slider_image]' alt='$slider_row[slider_title]'>
          </div>";
        }
        
        $slider_sql = query("SELECT * FROM slider limit 1,3");
        confirm($slider_sql);
        while($slider_row=mysqli_fetch_array($slider_sql)){
          echo "<div class='item' data-wrap='true' data-interval='1000'>
          <img class= 'slide-image' style='width:1500px; height:450px;' src='../resources/slider-imgs/$slider_row[slider_image]'  alt='$slider_row[slider_title]'>
          </div>";
        }
}


// ********************************** BACK END *****************************************************************************

function displayOrders(){
    $query = query("SELECT * FROM orders");
    confirm($query);

    while($row = mysqli_fetch_array($query)){
        $orders = <<<DELIMETER
        <tr>
        <td>{$row['order_id']}</td>
        <td>{$row['product_title']}</td>
        <td> <img style="height:62px; width:62px;" src=../../resources/uploads/{$row['product_img']} alt="img"></td>
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
        <td><a href = 'index.php?edit_product&id={$row['product_id']}'>{$row['product_title']}</a><br>
        <a href = 'index.php?edit_product&id={$row['product_id']}'><img style="width: 100px" src=../../resources/uploads/{$row['product_image']} alt={$row['product_title']} ></a>
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
        $product_title = escape($_POST['product_title']);
        $product_introduction = escape($_POST['product_introduction']);
        $product_description = escape($_POST['product_description']);
        $product_price = escape($_POST['product_price']);
        $product_category_id= escape($_POST['product_category']);
        $product_quantity = escape($_POST['product_quantity']);
        $product_image = escape($_FILES['file']['name']);
        $product_image_location = escape($_FILES['file']['tmp_name']);
        move_uploaded_file($product_image_location , UPLOAD_DIR . DS . $product_image);
        $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_quantity, product_long_description, product_description, product_image) VALUES('{$product_title}' , '{$product_category_id}' , '{$product_price}' , '{$product_quantity}' , '{$product_description}' , '{$product_introduction}' , '{$product_image}')" );
        confirm($query);
        redirect('index.php?products');
    }
}


function showCategories(){
    $query = query("SELECT * FROM categories");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
        $category = <<< DELIMETER
        <option value="{$row['cat_id']}">{$row['cat_title']}</option>
        DELIMETER;
        echo $category;
    }
    
}

function editProducts(){

    if(isset($_POST['update'])){
        $product_title = escape($_POST['product_title']);
        $product_introduction = escape($_POST['product_introduction']);
        $product_description = escape($_POST['product_description']);
        $product_price = escape($_POST['product_price']);
        $product_category_id= escape($_POST['product_category']);
        $product_quantity = escape($_POST['product_quantity']);
        $product_image = escape($_FILES['file']['name']);
        $product_image_location = escape($_FILES['file']['tmp_name']);

        if(empty($product_image)){
            $get_image = query("SELECT product_image FROM products WHERE product_id= ". escape($_GET['id']) ."");
            confirm($get_image);
            while($row = mysqli_fetch_array($get_image)){
                $product_image = $row['product_image'];
            }
        }
        move_uploaded_file($product_image_location , UPLOAD_DIR . DS . $product_image);
        $query = query("UPDATE products
        SET product_title='{$product_title}', product_category_id='{$product_category_id}', product_price='{$product_price}', product_quantity='{$product_quantity}', product_description='{$product_introduction}' , product_long_description='{$product_description}', product_image='{$product_image}' WHERE product_id = ". escape($_GET['id']) ." ");
        confirm($query);
        redirect('index.php?products');
    }
}

function showCategoryTitle($cat_id){
    $query = query("SELECT * FROM categories WHERE cat_id = $cat_id");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
        return $row['cat_title'];
    }
}

function showCategoriesInCategoryPage(){
    $query = query("SELECT * FROM categories");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
        $category = <<< DELIMETER
        <tr>
            <td>{$row['cat_id']}</td>
            <td>{$row['cat_title']}</td>
            <td><a class='btn btn-danger' href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class = 'glyphicon glyphicon-remove'></span></a></td>
        </tr>
        DELIMETER;
        echo $category;
    }
    
}

function addcategories(){
    if(isset($_POST['submit'])){
        $category_title = escape($_POST['category_title']);
        $query = query("INSERT INTO categories(cat_title) VALUES('{$category_title}')" );
        confirm($query);
        redirect('index.php?categories');
        set_message("Category Added");
    }
}


function addSlider(){

    if(isset($_POST['submit'])){
        $slider_title = escape($_POST['slider_title']);
        $slider_image = escape($_FILES['file']['name']);
        $slider_image_location = escape($_FILES['file']['tmp1_name']);
        move_uploaded_file($slider_image_location , SLIDER_DIR . DS . $slider_image);
        $query = query("INSERT INTO slider(slider_title , slider_image) VALUES('{$slider_title}' , '{$slider_image}')" );
        confirm($query);
        redirect('index.php?slider');
    }

}

function showSlider(){
    $query = query("SELECT * FROM slider");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
        $slide = <<< DELIMETER
        <tr>
            <td>{$row['slider_id']}</td>
            <td>{$row['slider_title']}</td>
            <td><img style='width:400px; height: 200px'  src=../../resources/slider-imgs/{$row['slider_image']} alt={$row['slider_title']} ></td>
        </tr>
        DELIMETER;
        echo $slide;
    }
}


?>