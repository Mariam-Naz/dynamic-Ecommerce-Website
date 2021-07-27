
        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
<h4 class="text-center bg-warning" style="color:red"><?php display_message();?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>S.N</th>
           <th>User</th>
           <th>Title</th>
           <th>Photo</th>
           <th>Quantity</th>
           <th>Amount</th>
           <!-- <th>Address</th> -->
          
      </tr>
    </thead>
    <tbody>
        
            <?php displayOrders();?>

    </tbody>
</table>
</div>
   
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