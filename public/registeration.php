<?php require_once('../resources/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Technofy</title>
    <!-- Bootstrap Core CSS -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <!-- Custom CSS -->
    <link href="css/registrationstyle.css" rel="stylesheet">
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

<div class="container-fluid reg-cont">
    <div class="col-md-12">
        <div class="card">
        <h4 class="text-center bg-warning" style="color:red"><?php display_message(); ?></h4>
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <form class="login" method="POST">
                            <?php reg_login(); ?>
                            <div class="group"> <label for="user" class="label">Username</label> <input name="reg_login_username" id="user" type="text" class="input" placeholder="Enter your username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input name="reg_login_password" id="pass" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"> <input type="submit" name="login" class="button" value="Sign In"> </div>
                            <div class="hr"></div>
                        </form>
                        <form class="sign-up-form" method="POST">
                            <?php reg_register(); ?>
                            <div class="group"> <label for="user" class="label">Username</label> <input name="reg_username" id="user" type="text" class="input" placeholder="Create your Username" require> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input name="reg_password" id="pass" type="password" class="input" data-type="password" placeholder="Create your password" require> </div>
                            <div class="group"> <label for="pass" class="label">Email Address</label> <input name="reg_email" id="pass" type="text" class="input" placeholder="Enter your email address" require> </div>
                            <div class="group"> <label for="pass" class="label">Mobile Number</label> <input name="reg_phone" id="pass" type="text" class="input" placeholder="Enter your mobile number" require> </div>
                            <div class="group"> <label for="pass" class="label">Home Address</label> <input name="reg_address" id="pass" type="text" class="input" placeholder="Enter your home address" require> </div>
                            <div class="group"> <input type="submit" name="signup" class="button" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>