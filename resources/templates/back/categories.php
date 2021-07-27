
    <div class="col-lg-12">
        <h1 class="page-header">
        Product Categories
        <h3 class='text-center bg-warning' style='color:red'><?php display_message(); ?> </h3>
        </h1>
<div class="row">
<div class="col-md-4">
    <form action="" method="post">
    
    <?php addcategories(); ?>
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name='category_title' class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name='submit' class="btn btn-primary" value="Add Category">
        </div>      
    </form>
</div>

<div class="col-md-8">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
            </tr>
        </thead>

        <tbody>
            <?php showCategoriesInCategoryPage(); ?>
        </tbody>

    </table>

</div>

</div>
<!-- /.container-fluid -->


<?php include(TEMPLATE_BACK . "/footer.php"); ?>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->







</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>