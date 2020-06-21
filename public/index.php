<?php require_once('../resources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

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
                    
                    <div class="container-fluid">
                    <?php include(TEMPLATE_FRONT . DS . "praise.php") ?>
                    </div>
                </div>
               

                <div class="row">
               

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

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                       
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>