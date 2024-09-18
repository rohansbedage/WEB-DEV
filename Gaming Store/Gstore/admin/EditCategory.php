
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


if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$description=$_POST['description'];
	$id=intval($_GET['id']);
$sql=mysqli_query($con,"update category set categoryName='$category',categoryDescription='$description',updationDate='$currentTime' where id='$id'");
$_SESSION['msg']="Category Updated !!";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Category</title>
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="shortcut icon" href="../assets/images/g.ico">

</head>
<body>
<?php include 'include/nav.php' ?>

<br>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active shadow-lg" aria-current="page" href="category.php">Add Categories</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
    <a class="nav-link shadow-lg" href="show.php">All Categories</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
  <a class="nav-link shadow-lg" href="Subcategory.php">Subcategory</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item">
			<a class="nav-link shadow-lg" href="Subcat.php">Sub Category Names </a>
		</li>
		&nbsp;&nbsp;&nbsp;
  
</ul>

<div class="container my-1 text-center py-5 z-depth-1">
<div class="row d-flex justify-content-center">
<div class="col-md-6">

		<div class="container">

						<div class="module-head my-2">
			<h2> Edit Category Name</h2>
		</div>
						
							<div class="module-body">
							

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>


									<br />

			<form class="form-horizontal row-fluid text-center" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from category where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>									
<div class="control-group ">
<label class="control-label " for="basicinput">Category Name</label>
<div class="controls my-4 shadow-lg">
<input type="text" placeholder="Enter category Name"  name="category" value="<?php echo  htmlentities($row['categoryName']);?>" class="form-control" required>
</div>
</div>
<br>

<div class="control-group">
											<label class="control-label " for="basicinput">Description</label>
											<div class="controls my-4 shadow-lg">
												<textarea class="form-control" name="description" rows="5"><?php echo  htmlentities($row['categoryDescription']);?></textarea>
											</div>
										</div>
									<?php } ?>	

									<div class="d-grid gap-2">
												<button type="submit" name="submit" class="btn btn-primary">Create</button>
											</div>

									</form>
							</div>
						</div>


						

						
						
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
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>