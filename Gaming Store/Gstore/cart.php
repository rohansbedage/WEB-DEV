<?php 
session_start();
error_reporting(0);
include('includes/common.php');

error_reporting(0);
if(isset($_POST['submit'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;

			}
		}
			
		}
	}
// Code for Remove a Product from Cart
if(isset($_POST['remove_code']))
	{

if(!empty($_SESSION['cart'])){
		foreach($_POST['remove_code'] as $key){
			
				unset($_SESSION['cart'][$key]);
		}
		
	}
}
// code for insert product in order table


if(isset($_POST['ordersubmit'])) 
{
	
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

	$quantity=$_POST['quantity'];
	$pdd=$_SESSION['pid'];
	$value=array_combine($pdd,$quantity);


		foreach($value as $qty=> $val34){



mysqli_query($con,"insert into orders(userId,productId,quantity) values('".$_SESSION['id']."','$qty','$val34')");
header('location:confirm.php');
}
}
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
echo "<script>alert('Billing Address has been updated');</script>";
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
echo "<script>alert('Shipping Address has been updated');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">

	<title>G-Store Cart</title>


	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/g.ico">



</head>

<body>
<style>
body {
  background-image: url('img/crevasse-wallpaper-.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
	<form name="cart " method="post">
		<?php
if(!empty($_SESSION['cart'])){


	?>

<div class="container font-weight-normal p-3 mb-4  rounded text-dark text-center">
		<?php
 $pdtid=array();
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

				array_push($pdtid,$row['id']);

	?>
	
				<div class="card shadow-lg  mb-3  p-3 mb-4">
					<div class="row g-0 ">

						<div class="col-md-4">
							<br>
							<img class="img-responsive"
								src="admin/productimages/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>"
								alt="" width="300">
								<div class="card-body "> Remove Product : &nbsp; &nbsp; 
									<input type="checkbox" class="form-check-input me-1" name="remove_code[]"
										value="<?php echo htmlentities($row['id']);?>" />
								</div>
						</div>
						<div class="col-md-8">



							<div class="card-body">
								<h5 class="card-title btn btn-dark text-white shadow">
									<?php echo $row['productName'];$_SESSION['sid']=$pd;?>
								</h5>
							

								<p class="card-text text-success"> Product Price : <b>
										<?php echo "Rs"." ".$row['productPrice']; ?>.00
									</b>
								</p>
								<p class="card-text text-info">Shipping Charge :<b>
										<?php echo "Rs"." ".$row['shippingCharge']; ?>.00
									</b>
								</p>

								<p><b> Update Quantity :</b> <input type="Number"
										value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>"
										name="quantity[<?php echo $row['id']; ?>]"></p>
								<p class="card-text btn btn-light shadow"> <b> Grand Total :
										<?php echo ($_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge']); ?>.00
								</p>
								</b><br><br>
								<input type="submit" name="submit" class="btn  btn-primary shadow-lg"
									value="Update Product">



							</div>
						</div>
					</div>
				</div>


				<?php } }
$_SESSION['pid']=$pdtid;
				?>
<br><br>




<div class="card text-center shadow-lg">
  <div class="card-header bg-dark text-white">
  PRICE DETAILS
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
   <h2> <p class="card-text ">Your Total Amount of Bill Is Rs. <b class="text-success"><?php echo $_SESSION['tp']="$totalprice". ".00/-"; ?></b></p></h2>
   <button type="submit" name="ordersubmit" class="btn btn-primary">PROCCED TO CHEKOUT</button>
  </div>
  <br>
</div>
<br><br>


				<?php } else {
include 'celse.php';
		}?>
			</div>
		</div>
		</div>
	</form>
	

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="assets/js/jquery.rateit.min.js"></script>
	<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->

	<script src="switchstylesheet/switchstylesheet.js"></script>

	<script>
		$(document).ready(function () {
			$(".changecolor").switchstylesheet({ seperator: "color" });
			$('.show-theme-options').click(function () {
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function () {
			$('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->
</body>

</html>