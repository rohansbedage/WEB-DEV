<?php
session_start();
error_reporting(0);
include('includes/common.php');
$oid=intval($_GET['oid']);
 ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order Tracking Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-6" href="G-Store.php"><h3>G-Store</h3></a>
    </div>
    <form class="d-flex">
    <a class="nav-link navbar-brand text-light fs-6" href="contact_us.php">Contact Us</a>
    <a class="nav-link navbar-brand text-light fs-6" href="logout.php"> Logout</a>
    </form>
  </nav>
</div>


<div class="container font-weight-normal p-3 mb-4 my-5 shadow-lg bg-light rounded text-dark text-center">
<h1 class="display-1 font-weight-normal bg-light rounded text-dark text-center"> Order Id: <?php echo $oid;?> </h1>


<div class="jumbotron jumbotron-fluid">
<section class="dark-grey-text p-5">
<?php $query=mysqli_query($con,"select products.productImage1 as pimg1,products.productName as pname,products.id as proid,orders.productId as opid,orders.quantity as qty,products.productPrice as pprice,products.shippingCharge as shippingcharge,orders.paymentMethod as paym,orders.orderDate as odate,orders.id as orderid from orders join products on orders.productId=products.id where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");

?>
								<table class="table table-hover  table-borderless container " >
									<thead>
										<tr>
											<th> <h3 class="text-center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; Status   </h3> </th>
											<th> <h3 class="text-center"> &nbsp; Remark   </h3> </th>
											<th> <h3 class="text-center">  Update Date \ Time </h3> </th>
										</tr>
									</thead>
									<tbody>

                  <?php 
$ret = mysqli_query($con,"SELECT * FROM ordertrackhistory WHERE orderId='$oid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
     ?>
     <br>
     <td><br><h5> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row['status'];?></h5><br></td>
     <td><br><h5 class="text-center" > <?php echo $row['remark'];?></h5><br></td>
          <td><br><h5 class="text-center">   <?php echo  $row['postingDate'];?></h5><br></td>
      </tr>
   <?php } }
   
else{
   ?>

   <button class="btn btn-light text-center  text-dark shadow-lg d-grid gap-2  col-6 mx-auto"><h1>Order Not Process Yet</h1></button>
<br><br>
   <?php  }
$st='Delivered';
   $rt = mysqli_query($con,"SELECT * FROM orders WHERE id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>

<button class="btn btn-light text-success text-center shadow-lg d-grid gap-2 mx-5 col-7 mx-auto"> <h1> &nbsp;&nbsp;&nbsp;&nbsp;Product Delivered successfully &nbsp;&nbsp;</h1></button>
<br><br>
   <?php } 
 
  ?>
</table>
<br><br><br>
<br>
<br>
<br>
<br>
 </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

     