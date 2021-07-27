<?php require_once('../../config.php'); 

if(!empty($_GET['id'])){
    $img_query = query("SELECT * FROM slider WHERE slider_id =  ". escape($_GET['id']) ."");
    $img = mysqli_fetch_array($img_query);
    $img_name = $img['slider_image'];
    $file = '../../../resources/slider-imgs/'.$img_name;
    unlink($file);
$query = query("DELETE FROM slider WHERE slider_id = ". escape($_GET['id']) ."");
confirm($query);    

set_message("Slider Deleted!!");
redirect("../../../public/admin/index.php?slider");
}
else{
    redirect("../../../public/admin/");
}

?>