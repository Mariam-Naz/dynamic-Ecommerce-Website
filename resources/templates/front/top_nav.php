
            
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
                            <a href="checkout.php">CHECKOUT</a>
                            
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>

                <form class="log-sign" style="--i: 1.8s" method="POST">
                <?php reg_logout(); ?>
                    <a href="registeration.php" class="btn transparent btn-nav">Login/Signup</a>
                    <button name="reg_logout" class="btn solid btn-nav">Logout</button>
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