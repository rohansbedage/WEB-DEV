<?php
session_start();
error_reporting(0);
include('includes/common.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:.php');
}
else{

	if(isset($_POST['update']))
	{
		$baddress=$_POST['billingaddress'];
		$bstate=$_POST['bilingstate'];
		$bcity=$_POST['billingcity'];
		$bpincode=$_POST['billingpincode'];
		$query=mysqli_query($con,"update users set billingAddress='$baddress',billingState='$bstate',billingCity='$bcity',billingPincode='$bpincode' where id='".$_SESSION['id']."'");
		if($query)
		{
		}
	}



	if(isset($_POST['shipupdate']))
	{
		$saddress=$_POST['shippingaddress'];
		$sstate=$_POST['shippingstate'];
		$scity=$_POST['shippingcity'];
		$spincode=$_POST['shippingpincode'];
		$query=mysqli_query($con,"update users set shippingAddress='$saddress',shippingState='$sstate',shippingCity='$scity',shippingPincode='$spincode' where id='".$_SESSION['id']."'");
		if($query)
		{
		}
	}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
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
<div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-light  text-center">



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
      

<!-------------------------------------------------------------------------------------------------------------------------------------->

<?php
$query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>
		<form class="register-form" role="form" method="post">


<p class="h4 mb-4 text-center"> <a href="BillingAddress.php" class="link-light" >Billing Address</a> / <a href="shipping.php"  class="link-light">Shipping Address
</a> </p>



<label class="info-title" for="Shipping Address">Shipping Address<span>*</span></label>
					    <textarea class="form-control shadow-lg p-2 my-3 text-center bg-white rounded text-input" placeholder="Shipping Address" name="shippingaddress" required="required"><?php echo $row['shippingAddress'];?></textarea>
						

<label class="info-title" for="Billing State ">Shipping State  <span>*</span></label>
			 <input type="text" class="form-control my-3 shadow-lg p-2 text-center bg-white rounded  text-input" id="shippingstate" name="shippingstate" value="<?php echo $row['shippingState'];?>" required>
			
             <label class="info-title" for="Billing City">Shipping City <span>*</span></label>
					    <input type="text" class="form-control  my-3 shadow-lg p-2 text-center bg-white rounded text-input" id="shippingcity" name="shippingcity" required="required" value="<?php echo $row['shippingCity'];?>" >
			
         
                        <label class="info-title" for="Billing Pincode">Shipping Pincode <span>*</span></label>
					    <input type="text" class="form-control  my-3 shadow-lg p-2 text-center bg-white rounded text-input" id="shippingpincode" name="shippingpincode" required="required" value="<?php echo $row['shippingPincode'];?>" >
					

     
      

<button type="submit" name="shipupdate" class="btn-upper btn-block  shadow-lg  text-center   btn btn-primary ">Update</button>



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