
<h1 class="page-header">
  Product Categories
  <h3 class='text-center bg-warning' style='color:red'><?php display_message(); ?> </h3>
</h1>

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

</div>
<!-- /#page-wrapper -->

<?php include(TEMPLATE_BACK . "/footer.php"); ?>