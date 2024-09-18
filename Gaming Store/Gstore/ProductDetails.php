<?php 
session_start();
error_reporting(0);
include('includes/common.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		}else{
			$message="Product ID is invalid";
		}
	}
}
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','$pid')");
echo "<script>alert('Product aaded in wishlist');</script>";
header('location:my-wishlist.php');

}
}
if(isset($_POST['submit']))
{
	$qty=$_POST['quality'];
	$price=$_POST['price'];
	$value=$_POST['value'];
	$name=$_POST['name'];
	$summary=$_POST['summary'];
	$review=$_POST['review'];
	mysqli_query($con,"insert into productreviews(productId,quality,price,value,name,summary,review) values('$pid','$qty','$price','$value','$name','$summary','$review')");
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <title>Product Details</title>
	
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
       
        <!-- Fonts --> 
		<link rel="shortcut icon" href="assets/images/g.ico">
    </head>
    
<body>

<?php include 'nav1.php'; ?> 

<?php 
$ret=mysqli_query($con,"select * from products where id='$pid'");
while($row=mysqli_fetch_array($ret))
{

?>  
<div class="my-5" >

<div class="container font-weight-normal shadow-lg p-3 mb-4 bg-light rounded text-dark text-center">

    <div class="card mb-3 my-3 p-3 mb-4">
  <div class="row g-0 ">
    <div class="col-md-4">
    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="300"  />

    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div class="stock-box">
     <span class="label"> </span>
    </div>
   <br><br>

<button type="button" class="btn btn-white text-white shadow-sm bg-dark"><?php echo htmlentities($row['productName']);?></button>

        <h5 class="card-title text-shadow: 2px 2px dark;"></h5><br>
        <h5 class="card-title">Availability : <b class=" text text-body"> <?php echo htmlentities($row['productAvailability']);?>
    
   
    
    
    
    
    </b></h5>

        <p class="card-text"> <h5> Product Brand : <?php echo htmlentities($row['productCompany']);?></h5></p>
        <p class="card-text "><h5 class=" text text-success">Shipping Charge : <b><?php if($row['shippingCharge']==0)
											{
												echo "Free";
											}
											else
											{
												echo htmlentities($row['shippingCharge']);
											}

											?> </b></p>
      </div>
    </div>
  </div>
</div>
</div></div> 
</div>
<div class="my-5" >

<div class=" container font-weight-normal shadow-lg p-3    bg-white rounded text-dark text-center">

<div><h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Product images </h1>  </div> 
<br>
<div class="row g-4  ">
    <div class="col-auto  mx-5">

    
       
<div class="controls">
<br>
<img width="300"  class="img Max-height=200" class="img-responsive"  alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" />

</div><br>
<button type="button" class="btn btn-white shadow">Product Image 1</button>

</div>
<br>
<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>

<div class="col-auto">


<div class="controls">
	<br>
    <img width="300"  class="img Max-height=200"  alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage2']);?>"/>

</div><br>
<button type="button" class="btn btn-white shadow">Product Image 2</button>

</div>

<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>



<div class="col-auto">


<div class="controls ">
<br>
<img width="300"  class="img Max-height=300" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage3']);?>"  />

<br><br>
</div>
<button type="button" class="btn btn-white shadow">Product Image 3</button>


</div>
<hr>
<div><h1 class="display-5 font-weight-normal shadow-SM p-3 mb-4 bg-transparent rounded text-dark text-center"> Product Description </h1>  </div> 

<p class="text"><h4><?php echo $row['productDescription'];?></h4></p>

<?php } ?>
<div >
	
</div>	


                     


<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>

	<script src="assets/js/scripts.js"></script>

	

	

	

</body>
</html>