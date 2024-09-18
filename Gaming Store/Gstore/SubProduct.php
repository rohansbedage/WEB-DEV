<?php
session_start();
error_reporting(0);
include('includes/common.php');
$cid=intval($_GET['scid']);
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
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-12">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    
  <title>G-Store</title>
</head>
<body>
<style>

body {
  background-image: url('img/wp7314437-dark-gaming-wallpapers.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.jumbotron{
  background-image: url('bg/.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%; 
}
</style>
<div class="my-5">
  <div class="container">
  <nav class="navbar  navbar-expand-lg sticky-top  bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-6" href="G-Store.php"><h3><b>G-Store</b></h3></a>
    </div>
    <form class="d-flex">


    
    <?php $sql=mysqli_query($con,"select id,categoryName  from category ");
while($row=mysqli_fetch_array($sql))
{
    ?>

				<a class="nav-link navbar-brand text-light fs-6" href="Product.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			
      
      
			<?php } ?>

     
      <button class="btn btn-light bg-light shadow-lg" href="cart.php" type="submit">MyCart</button>
    </form>
  </nav>
</div>
</div>




<?php $sql=mysqli_query($con,"select subcategory  from subcategory where id='$cid'");
while($row=mysqli_fetch_array($sql))
{
    ?>
<div class="container font-weight-normal p-3 mb-4 my-5 bg-transparent rounded text-dark text-center">

	<div class="jumbotron jumbotron-fluid bg-transparent">
<div class="container my-5 z-depth-1 ">
<section class="dark-grey-text p-5">
<br><br><br><br><br>

      <h1 class="display-1 text-white text-start"> <b><?php echo htmlentities($row['subcategory']);?>!</b> </h1>
    <p class="lead text-white text-start">The Latest online versions of games & Gaming Products Are Availabile On G-Store .</p>

      <br><br>

    <br><br>
    <hr class="bg-white mx-5 my-4 w-55" >
   
    <?php } ?>

  </div>
</div>
</div></div>
 







<!------------------------------------------------------------------------------------------------------------------------------------------>
  <div class="container-fluid my-5">
   <div class="row">
   <?php
$ret=mysqli_query($con,"select * from products where subCategory='$cid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while ($row=mysqli_fetch_array($ret)) 
{?>	

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="card col-lg-3 my-4 border border-dark shadow-lg" style="width: 18 rem;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img href="ProductDetails.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" alt="" class="card-img-top">
        <div class="card-body">
    <h5 href="ProductDetails.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></h5>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item text-danger"> Before Discount Price : <b>  <?php echo htmlentities($row['productPriceBeforeDiscount']);?></b></li>											    
    <li class="list-group-item text-success">Current Price : <b> <?php echo htmlentities($row['productPrice']);?></b></li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  

 

          
          
         <div class="card-body">
				
                        <?php if($row['productAvailability']=='In Stock'){?>
                                
                    <a href="Product.php?page=product&action=add&id=<?php echo $row['id']; ?>">
                    <button class="btn btn-primary shadow-lg " type="button">Add to cart</button></a>	
                    <a href="ProductDetails.php?pid=<?php echo htmlentities($row['id']);?>"> <button class="btn btn-primary shadow-lg "  type="button">View Product</button></a> 
                        <?php } else {?>
                    <button class="action btn btn-outline-white text-danger ">Out of Stock</button> 

            <?php } ?>  </div>      </div>              

            <?php } }
          
       	 else {?>
	
  <?php echo require 'cart.php'; ?>
  </div>

  
<?php } ?>	
                   
 
<!------------------------------------------------------------------------------------------------------------------------------------------>

     
    
 <!------------------------------------------------------------------------------------------------------------------------------------------>

 <script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	
	<script src="switchstylesheet/switchstylesheet.js"></script>


	

</body>
</html>