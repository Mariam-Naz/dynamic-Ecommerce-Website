<div class="col-md-12">
  <div class="row">
    <h1 class="page-header">
      Add Product
    </h1>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
    <?php addProducts(); ?>
    <div class="col-md-8">
      <div class="form-group">
        <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control">

      </div>

      <div class="form-group">
        <label for="product-title">Product Description</label>
        <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="product-title">Product introduction</label>
        <textarea name="product_introduction" id="" rows="5" class="form-control"></textarea>
      </div>

      <div class="form-group row">

        <div class="col-xs-3">
          <label for="product-price">Product Price</label>
          <input type="number" name="product_price" class="form-control" size="60">
        </div>
      </div>
    </div>
    <!--Main Content-->

    <!-- SIDEBAR-->

    <aside id="admin_sidebar" class="col-md-4">

      <div class="form-group">
        <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
      </div>
      <!-- Product Categories-->
      <div class="form-group">
        <label for="product-title">Product Category</label>
        <hr>
        <select name="product_category" id="" class="form-control">

          <?php showCategories(); ?>
        </select>


      </div>


      <!-- Product Quantity-->

      <div class="form-group">
        <label for="product-quantity">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control">
      </div>





      <!-- Product Brands-->


      <!-- <div class="form-group">
      <label for="product-title">Product Brand</label>
         <select name="product_brand" id="" class="form-control">
            <option value="">Select Brand</option>
         </select>
    </div> -->


      <!-- Product Tags -->


      <!-- <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div> -->

      <!-- Product Image -->
      <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="fileToUpload" id="fileToUpload">

      </div>



    </aside>
    <!--SIDEBAR-->



  </form>

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