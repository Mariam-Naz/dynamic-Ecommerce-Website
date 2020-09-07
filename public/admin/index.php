<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>
<?php 
if(!isset($_SESSION['username'])){
    redirect("../../public/login.php");
}

?>

        <div id="page-wrapper">

            <div class="container-fluid">

               
                <!-- /.row -->
                <?php 
                    if(!isset($_GET['orders']) && !isset($_GET['categories']) && !isset($_GET['products']) && !isset($_GET['add_product']) && !isset($_GET['edit_product']) && !isset($_GET['slider']) && !isset($_GET['users'])){
                        include(TEMPLATE_BACK . "/admin_content.php");
                    }           
                    if(isset($_GET['orders'])){
                        include(TEMPLATE_BACK . "/orders.php");
                    }
                    if(isset($_GET['categories'])){
                        include(TEMPLATE_BACK . "/categories.php");
                    }
                    if(isset($_GET['products'])){
                        include(TEMPLATE_BACK . "/products.php");
                    }
                    if(isset($_GET['add_product'])){
                        include(TEMPLATE_BACK . "/add_product.php");
                    }
                    if(isset($_GET['edit_product'])){
                        include(TEMPLATE_BACK . "/edit_product.php");
                    }
                    if(isset($_GET['slider'])){
                        include(TEMPLATE_BACK . "/slider.php");
                    }
                    if(isset($_GET['users'])){
                        include(TEMPLATE_BACK . "/users.php");
                    }
                ?>

                 <!-- FIRST ROW WITH PANELS -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include(TEMPLATE_BACK . "/footer.php"); ?>
