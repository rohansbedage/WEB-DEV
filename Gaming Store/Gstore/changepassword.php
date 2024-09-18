<?php
session_start();
error_reporting(0);
include('includes/common.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$contactno=$_POST['contactno'];
		$query=mysqli_query($con,"update users set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Your info has been updated');</script>";
		}
	}


date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update users  set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
header('location: changepassword.php?error=<span><strong>Password Changed Successfully !!</strong></span>');

}
else
{

	header('location: changepassword.php?error=<span><strong>The Current passwords don\'t match</strong></span>');
}
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>My Account</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body >
	<style>
	
.container {
  background-image: url('img/dark_city-wallpaper-1920x1080.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 rounded text-white text-center">



<nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="G-Store.php">Home</a>
        <a class="nav-link active" aria-current="page" href="Myaccount.php">My Account</a>

        <a class="nav-link" href="BillingAddress.php">Address</a>
        <a class="nav-link" href="contact_us.php">Contact</a>
      </nav>


<div class="container my-5 z-depth-1">


  <section class="dark-grey-text p-5">

    <div class="row">

     
      <div class="col-md-5 mb-4 mb-md-0">

        <div class="view">
          <img src="img/llg.png" class="img-fluid" alt="smaple image">
        </div>

      </div>
      &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; 


<!------------------------------------------------------------------------------------------------------------------------>


<div class="col-md-4 my-5 col mb-lg-1 ">

<!-- Form -->



<p class="h4 mb-5 display-5  text-center">Change  Password</p>
<form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">

<br>
<div class="form-group ">
    <label for="Current Password"></label>
    <input type="password" class="form-control  shadow-lg p-2 text-center bg-white rounded" id="cpass" name="cpass"  placeholder="Old-Password" required = "true">
  </div>
  <div class="form-group">
    <label for="New Password"></label>
    <input type="password" class="form-control  shadow-lg p-2 text-center bg-white rounded" id="newpass" name="newpass"  placeholder="Enter New Password" required = "true">
  </div>
  <div class="form-group">
    <label  for="Confirm Password"></label>
    <input type="password" class="form-control  shadow-lg p-2 text-center bg-white rounded"  id="cnfpass" name="cnfpass" placeholder="Confirm Password" required = "true">
  </div>
  <br>
  <div style="color:#FF0000;">
      <?php echo $error=filter_input(INPUT_GET,'error'); ?>
 </div>

<div class="d-grid gap-2  mx-auto">
<button  type="submit" name="submit" class="btn  btn-block my-4  shadow-lg  text-center  bg-light rounded"><b>Reset Password</b> </button>

</div>
<br>

&nbsp;
</form>
</div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>	
	
</body>
</html>
<?php } ?>