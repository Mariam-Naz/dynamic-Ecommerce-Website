<?php require_once('../resources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome Shop!</h1>
        </header>

        <hr>

        <!-- Title -->
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
        <?php goto_shop() ?>
          
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
