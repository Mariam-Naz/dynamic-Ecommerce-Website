<?php require_once('../../config.php'); 

if(!empty($_GET['id'])){
$query = query("DELETE FROM slider WHERE slider_id = ". escape($_GET['id']) ."");
confirm($query);    

set_message("Slider Deleted!!");
redirect("../../../public/admin/index.php?slider");
}
else{
    redirect("../../../public/admin/");
}

?>