<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>

            <style>
                .inner-nav {
                     display: none;
                 }
                 .inner-nav li a{
                     color: grey;
                 }
                 .inner-li:hover .inner-nav{
                     display: block;
                     list-style: none;
                 }
                 .inner-nav li:hover a{
                     color: white;
                 }
            </style>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="inner-li">
                        <a href="#" >Categories</a>
                        <ul class="inner-nav">
                            <?php get_categories();?>
                          
                    
                        </ul>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                     <li>
                        <a href="checkout.php">Checkout</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->