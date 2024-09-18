
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from users where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Users</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	
<?php include'include/nav.php' ?>

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


<section class="px-md-5 mx-md-5 shadow-lg  dark-grey-text">




	<div class="module">
	<p><div class='my-1'></div></p>
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> View Users Data </h1>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-success">
										<strong>Oh snap!</strong><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>

									<br />

							
								<table class="table table-hover" >
									<thead>
										<tr>
											<th>Sr.No</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
											<th> Shippping Address </th>
											<th>Billing Address </th>
											<th>Reg. Date </th>
											<th> Delete </th>

										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from users");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>								
										<tr>
										    <td><a href="Allusers.php?id=<?php echo htmlentities($cnt);?>" class="btn btn-light shadow-lg" ><?php echo htmlentities($cnt);?></a></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td> <?php echo htmlentities($row['contactno']); echo"&nbsp; &nbsp; &nbsp;";?></td>
											<td > <?php   echo htmlentities($row['shippingAddress'].$row['shippingCity'] . $row['shippingState']."  ".$row['shippingPincode']);?></td>
											<td><?php echo htmlentities($row['billingAddress']."".$row['billingCity']."".$row['billingState']."  ".$row['billingPincode']);?></td>
											<td><?php echo htmlentities($row['regDate']);?></td>
											<td><a href="Allusers.php?id=<?php echo $row['id']?>&del=delete" class="btn btn-primary" >Delete</a></td>
</td>


										
											</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

					<br><br>	
</section>	
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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
</body>
<?php } ?>