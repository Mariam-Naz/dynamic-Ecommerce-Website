<?php
include('connect.php');
include('navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="donate.css">
	<link rel="stylesheet" href="nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
</head>
<body>
<div class="container-fluid red-background size" style="background-image: linear-gradient(315deg, #f55656 0%, #f11c39 74%);">
	<div class="row" >
		<div class="col-md-6 offset-md-3">
			<h1 class="textheading" style="padding-top:5%; text-align:center; ">DONORS</h1>
            <hr class="white-bar" style="background-color: white; width:40%; height:3px">
		</div>
	</div>
</div>

<div class="container" style="padding: 60px 0;">
	<div class="row" id="data">

    <?php
    if((isset($_GET['city']) && !empty($_GET['city'])) &&(isset($_GET['blood_group']) && !empty($_GET['blood_group'])) ){
        $c=$_GET['city'];
        $g=$_GET['blood_group'];
        $sql="SELECT * from donar Where city='$c' AND blood_group='$g'";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                if($row['save_life_date']=='0'){
    echo'<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                    <span class="name" >'.$row['name'].'</span>
                    <span>'.$row['city'].'</span>
                    <span >'.$row['gender'].'</span>
                    <span>'.$row['blood_group'].'</span>
                    <span>'.$row['Email'].'</span>
                    <span>'.$row['phoneno'].'</span>
                  </div>';
                }else{ 
                    echo'<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                    <span class="name">'.$row['name'].'</span>
                    <span >'.$row['city'].'</span>
                    <span >'.$row['gender'].'</span>
                    <span >'.$row['blood_group'].'</span>
					<h4 class="name text-center">DONATED</h4>;
					</div>';
                }
            }
    }
    else{
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Data not found</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'; 
    }
}
    ?>
</body>
</html>