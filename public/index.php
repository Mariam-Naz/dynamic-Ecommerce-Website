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
                </div>
                </div>
                <div class="col-lg-12"  style="
    padding-left: 13%;
    padding-right: 13%">
                    <div class="container-fluid">
                    <?php include(TEMPLATE_FRONT . DS . "praise.php") ?>
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

                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>