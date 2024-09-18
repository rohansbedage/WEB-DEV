<?php 
session_start();
error_reporting(0);
include('includes/common.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <style>
	
  body {
    background-image: url('bg/wood_planks-wallpaper-2560x1440.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  <div class="my-5">
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-6" href="G-Store.php"><h3>G-Store</h3></a>
    </div>
    <form class="d-flex">
    <a class="nav-link navbar-brand text-light fs-6" href="contact_us.php">Contact Us</a>
    <a class="nav-link navbar-brand text-light fs-6" href="logout.php"> Logout</a>
    </form>
  </nav>
</div>
<div class="my-5" >
<div class="container font-weight-normal  p-4 mb-4  rounded text-dark text-center">

    <?php $query=mysqli_query($con,"select products.productImage1 as pimg1,products.productName as pname,products.id as proid,orders.productId as opid,orders.quantity as qty,products.productPrice as pprice,products.shippingCharge as shippingcharge,orders.paymentMethod as paym,orders.orderDate as odate,orders.id as orderid from orders join products on orders.productId=products.id where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>



    <div class="card mb-3 shadow-lg my-3 p-3 mb-4">
  <div class="row g-0 ">
    <div class="col-md-4 my-3">
   <b><?php echo $cnt;?></b>  &nbsp; &nbsp; &nbsp;
    <img class="img-responsive my-5" alt="" src="admin/productimages/<?php echo $row['proid'];?>/<?php echo $row['pimg1'];?>"  width="300"  />

    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div class="stock-box">
     <span class="label"> </span>
    </div>
   <br><br>

   <button type="button" class="btn btn-lg btn-white text-white  shadow-lg bg-dark">   Product Name : <?php echo $row['pname'];?> </button>
 
        <h5 class="card-title"></h5><br>
        <h5 class="card-title display-7   ">No. of Quantity: <b class=" text text-body"> 	<?php echo $qty=$row['qty']; ?> </b></h5>
 
        <h5 class="card-text display-7">&nbsp; Price Per unit : <b class=" text text-body"> <?php echo $price=$row['pprice']; ?> </b></h5>
        <p class="card-text"> <h5 class="display-7   " >&nbsp; Shipping Charge : <?php echo $shippcharge=$row['shippingcharge']; ?></h5></p>
        <p class="card-text"> <h5 class="display-7 "> Grandtotal : <?php echo (($qty*$price)+$shippcharge);?></h5></p>
        <p class="card-text"> <h5 class="display-7 ">&nbsp;&nbsp;
         Order Date : <?php echo $row['odate']; ?></h5></p>
      
         <p class="card-text text-end"> <h5 class="display-7 ">&nbsp; Payment Method : <?php echo $row['paym']; ?></h5></p>

<a class="btn  btn-block my-4  shadow-lg  text-center   rounded" href="myorderstatus.php?oid=<?php echo htmlentities($row['orderid']);?>" role="button">  <h4>Track Order</h4>  </a>


</div>
     
     
 
  </div>
</div>
</div> 

          <?php $cnt=$cnt+1;} ?>
      </div>
      
</div>      
</div>














    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html><?php } ?>