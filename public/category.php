<?php require_once('../resources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
<div class="container-fluid">

<!-- Jumbotron Header -->
<main class="jumbotron hero-spacer">
    <h1>Welcome To Technofy</h1>
    <p>Its great to have you! You wil find all the products you desired.</p>
</main>
<!-- Page Features -->
<div class="row">
    <?php goto_category() ?>
</div>

<!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
