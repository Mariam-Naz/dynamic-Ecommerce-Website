<?php require_once('../../config.php'); 

if(!empty($_GET['id'])){
$query = query("DELETE FROM registration WHERE reg_no = ". escape($_GET['id']) ."");
confirm($query);    

set_message("User Deleted!!");
redirect("../../../public/admin/index.php?users");
}
else{
    redirect("../../../public/admin/");
}

?>