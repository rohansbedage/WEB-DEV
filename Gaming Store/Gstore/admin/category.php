
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
$sql=mysqli_query($con,"insert into category(categoryName,categoryDescription) values('$category','$description')");
$_SESSION['msg']="Category Successfully Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Category</title>
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

<div class="container my-1 py-5 z-depth-1s  ">


<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text ">


  <!--Grid row-->
  <div class="row d-flex justify-content-center ">

	<!--Grid column-->
	<div class="col-md-6">

						<div class="module">
							<div class="module-head">
								<h2>Create Category</h2>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
								
									<div class="alert alert-success">
										<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-success">
                                   <strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid " name="Category" method="post" >
									
<div class="control-group">
<label class="control-label" for="basicinput"> Category Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="category" class="form-control my-3 shadow-lg" required>
</div>
</div>
<br>

<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls ">
												<textarea class="form-control my-3 shadow-lg" name="description" rows="5"></textarea>
											</div>
										</div>
<br>
	<div class="control-group">
											<div class="d-grid gap-2">
												<button type="submit" name="submit" class="btn btn-primary">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						</div>
						</div>
						</div>
						</div>




	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	
</body>
<?php } ?>