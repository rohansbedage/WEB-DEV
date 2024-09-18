
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['subcategory'];
	$productname=$_POST['productName'];
	$productcompany=$_POST['productCompany'];
	$productprice=$_POST['productprice'];
	$productpricebd=$_POST['productpricebd'];
	$productdescription=$_POST['productDescription'];
	$productscharge=$_POST['productShippingcharge'];
	$productavailability=$_POST['productAvailability'];
	
$sql=mysqli_query($con,"update  products set category='$category',subCategory='$subcat',productName='$productname',productCompany='$productcompany',productPrice='$productprice',productDescription='$productdescription',shippingCharge='$productscharge',productAvailability='$productavailability',productPriceBeforeDiscount='$productpricebd' where id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


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

<br>

  <!--Section: Content-->

    <!-- Grid row -->

      <!-- Grid column -->

		
<div class="container font-weight-normal shadow-lg p-3 mb-4 bg-white rounded text-dark text-center">
						<div class="module">
							<div class="module-head">
								<h1>Update Product</h1>
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
									<div class="alert alert-error">
										<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>

									<br />
			<form class="row g-2" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select products.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  
?>
<br>
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; 
<div class="col-auto ">

<label class="control-label" for="basicinput">Product Image1</label>

<div class="controls">
<br>
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage1']);?>" width="300" height="200"><br><br><a href="update-image1.php?id=<?php echo $row['id'];?>"class="btn btn-primary shadow-lg" >Change Image 1</a>
</div>
</div>
<br>
<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>

<div class="col-auto">

<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
	<br>
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" width="300" height="200"><br><br> <a href="update-image2.php?id=<?php echo $row['id'];?>"class="btn btn-primary shadow-lg">Change Image 2</a>
</div>
</div>

<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>



<div class="col-auto">

<label class="control-label" for="basicinput">Product Image3</label>
<div class="controls">
<br>
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage3']);?>" width="300" height="200"><br><br> <a href="update-image3.php?id=<?php echo $row['id'];?>"class="btn btn-primary shadow-lg">Change Image 3</a>
</div>
</div>
<p><div class='my-1'></div></p>
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Product Info </h1>



<?php echo"<br>"; ?>
<div class="col-auto container">
<label class="control-label " for="basicinput">Category</label>
<div class="controls">
<br>
<select name="category" class="form-select shadow-lg" onChange="getSubcat(this.value);"  required>
<option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['catname']);?></option> 
<?php $query=mysqli_query($con,"select * from category");
while($rw=mysqli_fetch_array($query))
{
	if($row['catname']==$rw['categoryName'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['categoryName'];?></option>
<?php }} ?>
</select>
</div>
</div>

									
<div class="col-auto container">

<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">
<br>
<select   name="subcategory"  id="subcategory"  class="form-select shadow-lg" required>
<option value="<?php echo htmlentities($row['subcatid']);?>"><?php echo htmlentities($row['subcatname']);?></option>
</select>
</div>
</div>

<?php echo"<br><br><br><br><br>"; ?>
<div class="col-auto container">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls ">
<br>
<input type="text "    name="productName"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['productName']);?>" class="form-control shadow-lg" >
</div>
</div>

<div class="col-auto container">
<label class="control-label" for="basicinput">Product Company</label>
<div class="controls">
<br>
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" value="<?php echo htmlentities($row['productCompany']);?>" class="form-control shadow-lg" required>
</div>
</div>
<div class="col-auto container">

<label class="control-label" for="basicinput">Product Price Before Discount</label>
<div class="controls">
<br>
<input type="text"    name="productpricebd"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['productPriceBeforeDiscount']);?>"  class="form-control shadow-lg" required>
</div>
</div>

<div class="col-auto container">

<label class="control-label" for="basicinput">Product Price</label>
<div class="controls">
<br>
<input type="text"    name="productprice"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['productPrice']);?>" class="form-control shadow-lg" required>
</div>
</div>

<?php echo"<br><br><br><br><br>"; ?>
<div class="control-group">
<label class="control-label" for="basicinput">Product Description</label>
<div class="controls">
<br>
<textarea  name="productDescription"  placeholder="Enter Product Description" rows="6" class="form-control shadow-lg">
<?php echo htmlentities($row['productDescription']);?>
</textarea>  
</div>
</div>

<div class="col-6">

<label class="control-label" for="basicinput">Product Shipping Charge</label>
<div class="controls">
<br>
<input type="text"    name="productShippingcharge"  placeholder="Enter Product Shipping Charge" value="<?php echo htmlentities($row['shippingCharge']);?>" class="form-control shadow-lg" required>
</div>
</div>

<div class="col-6">

<label class="control-label" for="basicinput">Product Availability</label>
<div class="controls">
<br>
<select   name="productAvailability"  id="productAvailability" class="form-select shadow-lg" required>
<option value="<?php echo htmlentities($row['productAvailability']);?>"><?php echo htmlentities($row['productAvailability']);?></option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>


<?php } ?>
<?php echo"<br><br><br><br><br><br><br>"; ?>
	<div class="control-group">
											<div  class="d-grid gap-2">
												<button type="submit" name="submit" class="btn btn-primary shadow-lg">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


<?php echo"<br>"; ?>
	
						
						
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	
</body>
<?php } ?>