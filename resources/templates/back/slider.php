<div class="col-md-12">
<div class="row">
<h1 class="page-header">
  Add Slider Image
  <h3 class='text-center bg-warning' style='color:red'><?php display_message(); ?> </h3>
</h1>
<div>


    <form action="" method="post" enctype="multipart/form-data">
    
    <?php addSlider(); ?>
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name='slider_title' class="form-control">
        </div>
        <div class="form-group">
            <label for="slider-title">Slider Image</label>
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <input type="submit" name='submit' class="btn btn-primary" value="Add Slider">
        </div>      
    </form>


<div class="col-md-8">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Image</th>
            </tr>
        </thead>

        <tbody>
            <?php showslider(); ?>
        </tbody>

    </table>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

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