
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pending Orders</title>
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="shortcut icon" href="../assets/images/g.ico">
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>
<body>

<?php include 'include/nav.php' ?>

<br><br>
<ul class="nav justify-content-center">
  <li class="nav-item">
  <a class="nav-link active shadow-lg" aria-current="page" href="Allusers.php">View All Users</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
  <a class="nav-link shadow-lg" href="PendingOrders.php">Pending Orders</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
  <a class="nav-link shadow-lg" href="DeliveredOrders.php">Delivered Orders</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
  <a class="nav-link shadow-lg" href="contact_fetch.php">Contact Us</a>
  </li>
  
</ul>
<div class="container my-2 py-3 z-depth-1">


<!--Section: Content-->
<section class="px-md-5  shadow-lg  dark-grey-text">


  <!--Grid row-->

	<!--Grid column-->

	<div class="module">
	<p><div class='my-1'></div></p>
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Pending Orders </h1>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
										<button type="button" class="close" data-dismiss="alert"></button>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Shipping Address</th>
											<th>Product </th>
											<th>Qty </th>
											<th>Amount </th>
											<th>Order Date</th>
											<th>Action</th>
											
										
										</tr>
									</thead>
								
<tbody>
<?php 
$status='Delivered';
$query=mysqli_query($con,"select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.	orderStatus!='$status' or orders.orderStatus is null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['username']);?></td>
<td><?php echo htmlentities($row['useremail']);?></td>
<td><?php echo htmlentities($row['shippingaddress'].",".$row['shippingcity'].",".$row['shippingstate']."-".$row['shippingpincode']);?></td>
											<td><?php echo htmlentities($row['productname']);?></td>
											<td><?php echo htmlentities($row['quantity']);?></td>
											<td><?php echo htmlentities($row['quantity']*$row['productprice']+$row['shippingcharge']);?></td>
											<td><?php echo htmlentities($row['orderdate']);?></td>
											<td>   <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" class="btn btn-primary" target="_self">Take Action</a>
											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
								</table>
							</div>
						</div>						

						<br>
						<br>	<br>
						<br>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>

</body>
<?php } ?>