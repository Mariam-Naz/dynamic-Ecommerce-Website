<?php

if(isset($_GET['id'])){
  $query = query("SELECT * FROM products WHERE product_id = ". escape($_GET['id']) ."");
  confirm($query);
  while($row = mysqli_fetch_array($query)){

  $product_title = escape($row['product_title']);
  $product_introduction = escape($row['product_description']);
  $product_description = escape($row['product_long_description']);
  $product_price = escape($row['product_price']);
  $product_category_id= escape($row['product_category_id']);
  $product_quantity = escape($row['product_quantity']);
  $product_image = escape($row['product_image']);

  }

}
?>


<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edit Product

</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">

<?php editProducts(); ?>
<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">
       
    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" cols="30" rows="10" class="form-control"><?php echo $product_description ?></textarea>
    </div>

    <div class="form-group">
           <label for="product-title">Product introduction</label>
      <textarea name="product_introduction" id="" rows="5" class="form-control"><?php echo $product_introduction ?></textarea>
    </div>

    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60" value=<?php echo $product_price ?>>
      </div>
    </div>

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>
          <hr>
        <select name="product_category" id="" class="form-control">
           <option value ='<?php echo $product_category_id ?>'><?php echo showCategoryTitle($product_category_id) ?></option>
            <?php showCategories(); ?>
        </select>


</div>


 <!-- Product Quantity-->

 <div class="form-group">
 <label for="product-quantity">Product Qantity</label>
        <input type="number" name="product_quantity" class="form-control" value=<?php echo $product_quantity ?>>
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
        <input type="file" name="file"> <br/>
      <?php echo "<img style='width:100px;' src='../../resources/uploads/$product_image' alt='$product_title'" ?>
      
    </div>



</aside><!--SIDEBAR-->


    
</form>

        <?php include(TEMPLATE_BACK . "/footer.php"); ?>