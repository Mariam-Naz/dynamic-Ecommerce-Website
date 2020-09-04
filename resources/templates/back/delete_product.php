<?php require_once('../../config.php'); 

if(!empty($_GET['id'])){
    $img_query = query("SELECT * FROM products WHERE product_id =  ". escape($_GET['id']) ."");
    $img = mysqli_fetch_array($img_query);
    $img_name = $img['product_image'];
    $file = '../../../resources/uploads/'.$img_name;
    unlink($file);
$query = query("DELETE FROM products WHERE product_id = ". escape($_GET['id']) ."");
confirm($query);    

set_message("Product Deleted!!");
redirect("../../../public/admin/index.php?products");
}
else{
    redirect("../../../public/admin/");
}

?>