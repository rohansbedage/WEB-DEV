<?php
session_start();
$email=$_SESSION['EMAIL'];

if(isset($_SESSION['IS_LOGIN'])){
	
	
}else{
	header('location:login.php');
	die();
}

if(isset($_POST['submit']))
{
	$password=$_POST['password'];
	$email=$_SESSION['EMAIL'];
	$connect = mysqli_connect("localhost", "root", "", "rohan");
	$query2 ="update user set password='$password' where email='$email'";
	$result=mysqli_query($connect,$query2);
	if($result){
		echo "<script>alert('Password Changed Succesfully');</script>";
		echo "<script>window.location.href='login.php'</script>";

	}


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Change Your Password</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>



<body>


<head>


<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.cpassword.value)
{
alert('New Password and Re-Password field does not match');
document.signup.cpassword.focus();
return false;
}
return true;
}   

</script>
</head>

<body class="be-splash-screen">
<div class="bg-light">

<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>
                <div class="page-title"><a href="home.php" class="text-dark">Reset Password</a></div>


            
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="login.php" role="button" aria-expanded="false"><span class="icon mdi mdi-home"></span></a></li>

                                                      
                    </ul>
                </div>


              
        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->




    </div>
 <!----------------------------------------------------------------------------------------------------------------------------------->     

    <div class="be-wrapper be-login  ">
        <div class="be-content ">
            <div class="main-content container-fluid">
                <div class="splash-container ">
                    <br><br><br><br>
                    <div class="card card-border-color card-border-color-primary shadow-lg  ">
                        <div class="card-header"><img class="logo-img" src="includes/images/vlogo.jpeg" alt="logo" width="{conf.logoWidth}" height="57"><span class="splash-description"><br> <b>Please enter your new password.</b> </span></div>
                        <div class="card-body ">

<div class="login-form">
    <form id="signup" name="signup" class="login-form" onsubmit="return checkpass();" method="post">
       
        <div class="form-group first_box">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="true">
        </div>
        <div class="form-group first_box">
            <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Conform Password" required="true">
        </div>
        <div class="form-group second_box">
 

		<input name="submit" type="submit" class="btn btn-block btn-primary btn-xl"  value="Submit" />
        </div>       
    </form>
    
</div>
</div>
</div>


<br><br><br><br><br><br><br><br><br><br><br>




<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
        });
    </script>
</body>


