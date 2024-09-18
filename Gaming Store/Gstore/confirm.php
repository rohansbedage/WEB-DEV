<?php
session_start();
error_reporting(0);
include('includes/common.php');

if(strlen($_SESSION['login'])==0)
    {   
header('location:.php');
}
else{ 
	
	if (isset($_POST['submit'])) {

	mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
	unset($_SESSION['cart']);
	header('location:success.php');

}



	// code for billing address updation
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


// code for Shipping address updation
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
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My Account</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<style>
body {
  background-image: url('bg/dark_city-wallpaper-1920x1080.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>


	<div class="container font-weight-normal  shadow-lg p-3 mb-4 my-5 bg-white rounded text-dark text-center">


		<nav class="nav nav-masthead justify-content-center float-md-end">
			<a class="nav-link  link-dark active" aria-current="page" href="G-Store.php">Home</a>
			<a class="nav-link  link-dark active" aria-current="page" href="Myaccount.php">My Account</a>
			<a class="nav-link link-dark" href="Product.php">Back To Cart</a>
		</nav>

		<br>


		<div class="jumbotron jumbotron-fluid ">
			<div class="container ">
				<h1 class="display-4 my-4"> <b> Confirm Your Address</b></h1>
				<p class="lead"> Before Proceed to checkout Please Confirm Your Address !
				</p>
			</div>
			<br><br>
			<div class="container  z-depth-1">

				<div class="row g-3">

					<div class="col-md-4  mb-3 mb-md-0">

						<div class="view">
							<img src="img/g1.png" class="img-fluid" alt="smaple image">
						</div>

					</div>


					<!----------------------------------------------------------------------------------------------------------------------------->
					<div class="col-md-4 my-5 col-sm-12 estimate-ship-tax">
						<table class="table table-bordered shadow">
							<thead>
								<tr>
									<th>
										<span class="estimate-title">Billing Address</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-group">
											<?php
$query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

											<form class="register-form" role="form" method="post">






												<label class="info-title" for="Billing Address">Billing Address</label>
												<textarea
													class="form-control my-3  shadow-lg p-2 text-center bg-white rounded text-input"
													placeholder="Billing Address" name="billingaddress"
													required="required"><?php echo $row['billingAddress'];?></textarea>

												<!-- Email -->

												<label class="info-title" for="Billing State ">Billing State
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="bilingstate" name="bilingstate"
													value="<?php echo $row['billingState'];?>" required>

												<label class="info-title" for="Billing City">Billing City
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="billingcity" name="billingcity" required="required"
													value="<?php echo $row['billingCity'];?>">



												<label class="info-title" for="Billing Pincode">Billing Pincode
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="billingpincode" name="billingpincode" required="required"
													value="<?php echo $row['billingPincode'];?>">



												<button type="submit" name="update"
													class="btn-upper btn-block   shadow-lg  text-center   btn btn-primary ">Update</button>



												&nbsp;
											</form>
											<?php } ?> <br>
									</td>
								</tr>
							</tbody><!-- /tbody -->

						</table><!-- /table -->
					</div>


					<!----------------------------------------------------------------------------------------------------------------------------->

					<div class="col-md-4 my-5  col-sm-12 estimate-ship-tax">
						<table class="table table-bordered shadow">
							<thead>
								<tr>
									<th>
										<span class="estimate-title">Shipping Address</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-group">
											<?php
$query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

											<form class="register-form" role="form" method="post">






												<label class="info-title" for="Billing Address">Shipping Address</label>
												<textarea
													class="form-control my-3  shadow-lg p-2 text-center bg-white rounded text-input"
													placeholder="Billing Address" name="shippingaddress"
													required="required"><?php echo $row['shippingAddress'];?></textarea>

												<!-- Email -->

												<label class="info-title" for="Billing State ">Shipping State
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="shippingstate" name="shippingstate"
													value="<?php echo $row['shippingState'];?>" required>

												<label class="info-title" for="Billing City">Shipping City
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="shippingcity" name="shippingcity" required="required"
													value="<?php echo $row['shippingCity'];?>">



												<label class="info-title" for="Billing Pincode">Shipping Pincode
													<span>*</span></label>
												<input type="text"
													class="form-control my-3 shadow-lg p-2 text-center bg-white rounded text-input"
													id="shippingpincode" name="shippingpincode" required="required"
													value="<?php echo $row['shippingPincode'];?>">



												<button type="submit" name="shipupdate"
													class="btn-upper btn btn-primary checkout-page-button">Update</button>


												&nbsp;
											</form>
											<?php } ?> <br>
									</td>
								</tr>
							</tbody><!-- /tbody -->
						</table><!-- /table -->
					</div>
					<hr>

					<div class="jumbotron jumbotron-fluid ">
						<h1 class="display-5 my-4"> <b> Choose Your Payment Method</b></h1>
						<div class="container ">


							<form name="payment" method="post">
								<ul class="list-group list-group-flush">



									<li class="list-group-item">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod" value="COD"
												checked>
											<label class="form-check-label">
												COD
											</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod"
												value="Internet Banking">
											<label class="form-check-label">
												Internet Banking
											</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod"
												value="Debit / Credit card">
											<label class="form-check-label">
												Debit / Credit card
											</label>
										</div>
									</li>

								<br>	
									<input type="submit" value="submit" name="submit" class="btn btn-light">

								</ul>









							</form>
							<!----------------------------------------------------------------------------------------------------------------------------->

						</div>
					</div>


					<!-- For demo purposes – can be removed on production -->
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
						integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
						crossorigin="anonymous"></script>

</body>

</html>
<?php } ?>