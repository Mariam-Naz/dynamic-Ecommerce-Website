<?php require_once('../../config.php'); 

if(!empty($_GET['id'])){
$query = query("DELETE FROM orders WHERE order_id = ". escape($_GET['id']) ."");
confirm($query);    

set_message("Order deleted");
redirect("../../../public/admin/index.php?orders");
}
else{
    redirect("../../../public/admin/");
}

?>