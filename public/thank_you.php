<?php require_once('../resources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_NcXIOl.json"  background="#3490dc"  speed="1"  style="width: 100%; height: 90%; position: absolute;" autoplay></lottie-player>
<div class='container thankyou-cont text-center'>
<div class="row">
    <div class="col-lg-12 text-center thankyou-heading jumbotron">
        <h1 class="section-heading ">Thank You For Ordering!</h1>
    </div>
</div>
<div class="row">
<div class="col-xs-4 col-sm-offset-4">
<h2>You order details</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo isset($_SESSION['quantity_total']) ? $_SESSION['quantity_total'] : $_SESSION['quantity_total'] = "0";?>
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

</div>
</div>

<?php session_destroy(); ?>

