
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
           <th>Title</th>
           <th>Photo</th>
           <th>Quantity</th>
           <th>Amount</th>
          
      </tr>
    </thead>
    <tbody>
        
            <?php displayOrders();?>
        

    </tbody>
</table>
</div>
   
<?php include(TEMPLATE_BACK . "/footer.php"); ?>