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

<hr>
        <!-- Footer -->
<footer class="page-footer font-small pt-4" style='background-color:#1b1e23; margin-bottom: 0px; color:#a9a9a9'>

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 mx-auto">

      <!-- Content -->
      <h5 class="text-uppercase mt-3 mb-4" style='margin-top:50px;'>About US</h5>
      <p style = 'font-size:13px;'>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="text-uppercase mt-3 mb-4">Top products categories</h5>

      <ul class="list-unstyled">
        <li>
          Laptops
        </li>
        <li>
          Mobiles
        </li>
        <li>
          Computers
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">find us</h5>

      <ul class="list-unstyled">
        <li>
          <a href="mailto:mariamnaz212@gmail.com">mariamnaz212@gmail.com</a>
        </li>
        <li>
          <a href="mailto:msmunami63@gmail.com">msmunami63@gmail.com</a>
        </li>
        <li>
         <a href="https://wa.me/923340289059/?text=HI!%20Reached%20You%20Through%20Technofy">0334-0289059</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Pages</h5>

      <ul class="list-unstyled">
        <li>
          Contact
        </li>
        <li>
          Checkout
        </li>
        <li>
          Account
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
  </li>
  <li class="list-inline-item">
    <a href="#!" class="btn btn-danger">Sign up!</a>
  </li>
</ul>
<!-- Call to action -->

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a href="https://www.facebook.com/mariam.naz.5477" class="btn-floating btn-fb mx-1">
      <i class="fab fa-facebook-f"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="https://twitter.com/msmunami63" class="btn-floating btn-tw mx-1">
      <i class="fab fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1">
      <i class="fab fa-google-plus-g"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1">
      <i class="fab fa-linkedin-in"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="https://wa.me/923340289059/?text=HI!%20Reached%20You%20Through%20Technofy" class="btn-floating btn-li mx-1">
      <i class="fab fa-whatsapp"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> m&mforce.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="./public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./public/js/bootstrap.min.js"></script>

</body>

</html>
