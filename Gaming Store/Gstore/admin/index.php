<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="Allusers.php";//
$_SESSION['alogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Gaming Store Admin </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="shortcut icon" href="../assets/images/g.ico">

</head>
<body>

<style>

body{
  background-image: url('../img/crevasse-wallpaper-.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;


}  
.container {
  background-image: url('img/coconut_tree_blac.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
</style>


<div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-dark text-center">
   

<div class="row g-3">

  <div class="container my-5 z-depth-1">

<!--Section: Content-->
<section class="dark-grey-text p-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 my-5 col mb-4 mb-md-0">

      <div class="view">
      <img src="../img/cr4.png" class="img-fluid"  alt="smaple image">

      </div>

    </div>
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; 

    <!-- Grid column -->
    <div class="col-md-4 col mb-lg-1 ">
	<form class="form-vertical" method="post">



	<p class="h4 mb-4 display-6  my-5 text-center">Admin Sign In</p>


	<br>


	<input type="text" class="form-control shadow-lg p-2 text-center bg-white rounded" id="inputEmail" name="username" aria-describedby="emailHelp"  placeholder="Username">

	<input type="password" class="form-control my-4 shadow-lg p-2 text-center bg-white rounded" id="inputPassword" name="password" placeholder="Password">

	<div class="d-grid gap-2  mx-auto">
<button  type="submit" name="submit" class="btn  btn-block my-4  shadow-lg  text-center  bg-light rounded">Sign in</button>

</div>
	


					<a  class="nav-link link-dark" href="http://localhost/project/G-Store.php">
						
						Back to G-Store
						
						</a>

						

						
				
					
					
						
					
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->


	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>