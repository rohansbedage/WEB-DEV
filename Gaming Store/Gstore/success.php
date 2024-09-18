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
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-white">
  <style>

body, html {
  height: 100%;
}

body {
  /* The image used */
  background-image: url("img/4521632.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
body {
  font-family: 'Fauna One', serif;
  font-size: 16px;  
}

h1 {
  font-family: Cinzel, serif;
  font-size: 46px;  
}

</style>
  <div class="my-5">
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-6" href="G-Store.php"><h3><b>G-Store</b></h3></a>
    </div>
    <form class="d-flex">
    <!--a class="navbar-brand lead fst-italic text-white" href="#"><b>Check : Order Status</b></a-->

    </form>
  </nav>
</div>

<div class="container font-weight-normal p-3 mb-4  my-5  rounded text-dark text-start">
<h2 class="display-1 fst-italic text-white" style="font-size:3vw;"><b>Order Placed Successfully</b></h2>
<hr class="bg-white mx-0  w-50" >

<br><br>
<h2 class="display-1 fst-italic text-white " style="font-size:2vw;"><b>Hey <?php if(strlen($_SESSION['login']))
    {   ?> 
				<?php echo htmlentities($_SESSION['username']);?>
				<?php } ?> ,   </h2>
<h2 class="display-1 fst-italic text-white " style="font-size:2vw;"><b>
We're happy to let you know <br> that your order Placed Successfully !<br></b></h2>


<br>
<h2 class="display-1 fst-italic text-white" style="font-size:2vw;"><b>Thanks For Shopping!</b></h2>

<br><br><br><br><br><br>
<p class="lead fst-italic mx-5 text-white text-center ">  You con follow the status of your shipment by clicking
here : <a class="lead fst-italic text-white " href="myorders.php"><b> Order Status</b> </a> </p>
<hr class="bg-white mx-5  w-60" >






    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>