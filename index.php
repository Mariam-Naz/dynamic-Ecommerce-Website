<?php

ob_start();
// session_start();
// session_destroy();

defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR); 

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "resources/templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__ . DS . "resources/templates/back");

defined("UPLOAD_DIR") ? null : define("UPLOAD_DIR",__DIR__ . DS . "resources/uploads");

defined("SLIDER_DIR") ? null : define("SLIDER_DIR",__DIR__ . DS . "resources/slider-imgs");

defined("DB_HOST") ? null : define("DB_HOST","localhost"); 

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS","");

defined("DB_NAME") ? null : define("DB_NAME","ecommerce_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("./resources/functions.php");
require_once("./resources/cart.php");

//my
// echo DIRECTORY_SEPARATOR; /

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="PC computers, mobiles, tablets, smart TVs, laptops">
    <meta name="description" content="Best place for tech products with free delivery all over Pakistan">

    <title>Technofy</title>

    <!-- Bootstrap Core CSS -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <!-- Navigation -->
    <header>
        <div class="container-fluid nav-confluid">
            <input type="checkbox" name="" id="check">
        <!-- brandname -->
            <div class="logo-container">
                <h3 class="logo">TECHNOFY</h3>
            </div>
        <!-- options-->
            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.php">HOME</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">CATEGORIES<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <?php get_categories();?>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="./public/checkout.php">CHECKOUT</a>
                            
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="./public/bd/index.php">BLOOD_DONATE</a>
                            
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="./public/contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>

                <form class="log-sign" style="--i: 1.8s" method="POST">
                <?php reg_logout();
                        if(!isset($_SESSION['reg_user'])){
                   echo'<a href="./public/registeration.php" class="btn transparent btn-nav">Login</a>';
                   echo '<a href="./public/registeration.php" class="btn solid btn-nav">Signup</a>';
                        }else{?>
                            <a href="#" class="btn transparent btn-nav"><?php echo $_SESSION['reg_user'] ?></a>
                            <button name="reg_logout" class="btn solid btn-nav">Logout</button>
                      <?php  }
                    ?>

                </form>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="overlay"></div>
        </section>
    </main>
        
        <!-- /.container -->
<!-- Page Content -->
<div class="container-fluid">

<div class="row">

<!-- <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?> -->

<div class="col-lg-12" style="
padding-left: 0px;
padding-right: 0px">

<div class="carousel-holder">
<div class='row'>
    <div class="col-lg-12">
        
<?php include(TEMPLATE_FRONT . DS . "slider.php") ?>

    </div>
</div>
</div>
</div>
</div>
<div class="col-lg-12"  style="
padding-left: 13%;
padding-right: 13%">
    <div class="container-fluid">
    <?php include(TEMPLATE_FRONT . DS . "praise.php") ?>
    </div>



<div class="row">

    <div class="container-fluid latest-cont">
        <h3>Latest Products</h3>
    </div>
    <?php get_products(); ?>


        <!-- --- rating---- -->
            <!-- <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div> -->
</div>

</div>
</div>


<!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>