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
$_SESSION['msg']="Category Created !!";

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
	<title>Show</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="shortcut icon" href="../assets/images/g.ico">
</head>

<body>

<?php include 'include/nav.php' ?>
	<br>


<!--Section: Content-->
<section class=" text-center text-lg-left ">


  
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
	<br>
	<div class="container">
		<div>
			<br>
		<div class="module-head my-2">
			<h2>All Categories</h2>
		</div>
		<div>
			<?php if(isset($_POST['submit']))
{?>

			<div class="alert alert-success">
				<strong>Well done!</strong>
				<?php echo htmlentities($_SESSION['msg']);?>
				<?php echo htmlentities($_SESSION['msg']="");?>
				<button type="button" class="btn-close" data-dismiss="alert"></button>
			</div>
			<?php } ?>


			<?php if(isset($_GET['del']))
{?>
			<div class="alert alert-danger">
				<strong>Oh snap!</strong>
				<?php echo htmlentities($_SESSION['delmsg']);?>
				<?php echo htmlentities($_SESSION['delmsg']="");?>
				<button type="button" class="btn-close" data-dismiss="alert"></button>
			</div>
			<?php } ?>

			<br />
			<div>
				<table class="table table-hover shadow-lg">
					<thead> 
					
						<tr>
							<th>#</th>
							<th>Category</th>
							<th>Description (Admin Purpose)</th>
							<th>Creation date</th>
							<th>Last Updated</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php $query=mysqli_query($con,"select * from category");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
						<tr>
							<td>
								<?php echo htmlentities($cnt);?>
							</td>
							<td>
								<?php echo htmlentities($row['categoryName']);?>
							</td>
							<td>
								<?php echo htmlentities($row['categoryDescription']);?>
							</td>
							<td>
								<?php echo htmlentities($row['creationDate']);?>
							</td>
							<td>
								<?php echo htmlentities($row['updationDate']);?>
							</td>
							<td>
								<a href="EditCategory.php?id=<?php echo $row['id'] ?>" role="button"
									class="btn btn-primary">Edit</a>
								<a href="show.php?id=<?php echo $row['id']?>&del=delete"
									class="btn btn-primary">Delete</a>
							</td>
						</tr>
						<?php $cnt=$cnt+1; } ?>
				</table>
				
			</div>

			<br><br>
		</div>



		<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
		<script src="scripts/datatables/jquery.dataTables.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
			integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
			integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
			crossorigin="anonymous"></script>
</body>
<?php } ?>
</html>