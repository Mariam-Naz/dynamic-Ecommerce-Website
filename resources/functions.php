<?php
    
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
<div class="col-sm-4 col-lg-4 col-md-4">
<div class="thumbnail">
<a href='item.php?id={$row['product_id']}'><img src=$row[product_image] alt=""></a>
<div class="caption">
    <h4 class="pull-right">Rs. $row[product_price]</h4>
    <h4><a href="item.php?id={$row['product_id']}">$row[product_title]</a>
    </h4>
    <p>$sub_desc ...<a href='item.php'> Read more</a></p>
    <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">ADD TO CART</a>
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
<a href="category.php?id={$row['cat_id']}" class='list-group-item'>$row[cat_title]</a>
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
                <img src= $row[product_image] alt="">
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
            $desc = $row['product_description'];
            $sub_desc = substr($desc,0,100);
            $product = <<< DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src= $row[product_image] alt="">
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
// ********************************** BACK END *****************************************************************************
?>