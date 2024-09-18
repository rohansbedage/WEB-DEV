
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

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Manage Product</title>
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="shortcut icon" href="../assets/images/g.ico">
	
</head>
<body>

<?php include'include/nav.php' ?>

<br>
<ul class="nav justify-content-center">
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
  <li class="nav-item bg-light">

  <a class="nav-link active shadow-lg" aria-current="page" href="InsertProduct.php">Insert Product</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item bg-light">
  <a class="nav-link  shadow-lg" href="ManageProduct.php">Manage Products</a>
  </li>
 
  &nbsp;&nbsp;&nbsp;

</ul>


	<div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
<h1 class="font-weight-normal my-3 p-3 mb-4 bg-transparent rounded text-dark text-center">Manage Products </h1>

							
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-success">
										<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table table-hover display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>Category </th>
											<th>Subcategory</th>
											<th>Company Name</th>
											<th>Product Creation Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select products.*,category.categoryName,subcategory.subcategory from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr class="shadow-sm">
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['productName']);?></td>
											<td><?php echo htmlentities($row['categoryName']);?></td>
											<td> <?php echo htmlentities($row['subcategory']);?></td>
											<td><?php echo htmlentities($row['productCompany']);?></td>
											<td><?php echo htmlentities($row['postingDate']);?></td>
											<td>
											<a href="EditProducts.php?id=<?php echo $row['id']?>" class="btn btn-primary" >Edit</a>
											<a href="ManageProduct.php?id=<?php echo $row['id']?>&del=delete" class="btn btn-primary" >Delete</a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
		
	</div><!--/.wrapper-->


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	
	
</body>
<?php } ?>