
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<link rel="shortcut icon" href="../assets/images/g.ico">

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
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center">Manage User Issues</h1>

<br>	
							<div class="module-body table">
	
							
								<table  class=" table  table-hover display">
									<thead>
										<tr>
											<th>#</th>
											<th> User Email</th>
											<th>message</th>
											<th>User Name</th>
											<th>Message Time</th>
											
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from contact_us");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td> <?php echo htmlentities($row['message']);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['time']); ?></td>
										</td>
											
											
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

						<br><br>	
						
						
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