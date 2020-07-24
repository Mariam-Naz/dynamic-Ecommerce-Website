<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>
<?php
if(!isset($_SESSION['reg_user'])){
    redirect("registeration.php");
} ?>

    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
    <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
    <h1>Checkout</h1>

<form class="" action="" method="post">
<?php 
    if(isset($_POST['submit'])){
    redirect('thank_you.php');
    orders();
    }
?>
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
         <?php cart(); ?>
        </tbody>
    </table>
    <?php echo showBuyButton(); ?>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php 
echo isset($_SESSION['quantity_total']) ? $_SESSION['quantity_total'] : $_SESSION['quantity_total'] = "0";

?>
</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">Rs.<?php 
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
 
?>/-
</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


           <hr>

        <!-- Footer -->

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT .  "/footer.php");?>