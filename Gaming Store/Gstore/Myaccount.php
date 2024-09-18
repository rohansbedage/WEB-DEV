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
		}
	}


date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



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
    
      <div class="col-md-7 mb-lg-0 mb-4">
<!------------------------------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

		<form class="register-form" role="form" method="post">


<p class="h4 my-4 mb-4 text-center">Personal Information</p>

<!-- Email -->
<label class="info-title" for="name">Name<span>*</span></label>
					    <input type="text" class="form-control my-4 shadow-lg p-2 text-center bg-white rounded text-input" value="<?php echo $row['name'];?>" id="name" name="name" required="required">
			

<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
			 <input type="email"  placeholder="Disabled input" class="form-control Disabled input text-input  my-4 shadow-lg p-2 text-center rounded" id="exampleInputEmail1" value="<?php echo $row['email'];?>" readonly>
			
<!-- Password -->

<label class="info-title" for="Contact No.">Contact No. <span>*</span></label>
					    <input type="text" class="form-control  text-input  my-4 shadow-lg p-2 text-center bg-white rounded" id="contactno" name="contactno" required="required" value="<?php echo $row['contactno'];?>"  maxlength="10">
			

		
<button type="submit" name="update" class="btn-upper btn-block my-4  shadow-lg  text-center   btn btn-primary ">Update</button>

<br>
<a class="nav-link" href="changePassword.php">Change Password ?</a>

&nbsp;
</form>
<?php } ?>

























</div>
</div>


	<!-- For demo purposes – can be removed on production -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>	
	
</body>
</html>
<?php } ?>