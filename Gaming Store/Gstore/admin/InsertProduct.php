
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcategory=$_POST['subcategory'];
	$productname=$_POST['productName'];
	$productcompany=$_POST['productCompany'];
	$productprice=$_POST['productprice'];
	$productpricebd=$_POST['productpricebd'];
	$productdescription=$_POST['productDescription'];
	$productscharge=$_POST['productShippingcharge'];
	$productavailability=$_POST['productAvailability'];
	$productimage1=$_FILES["productimage1"]["name"];
	$productimage2=$_FILES["productimage2"]["name"];
	$productimage3=$_FILES["productimage3"]["name"];
//for getting product id
$query=mysqli_query($con,"select max(id) as pid from products");
	$result=mysqli_fetch_array($query);
	 $productid=$result['pid']+1;
	$dir="productimages/$productid";
if(!is_dir($dir)){
		mkdir("productimages/".$productid);
	}

	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$productid/".$_FILES["productimage1"]["name"]);
	move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/$productid/".$_FILES["productimage2"]["name"]);
	move_uploaded_file($_FILES["productimage3"]["tmp_name"],"productimages/$productid/".$_FILES["productimage3"]["name"]);
$sql=mysqli_query($con,"insert into products(category,subCategory,productName,productCompany,productPrice,productDescription,shippingCharge,productAvailability,productImage1,productImage2,productImage3,productPriceBeforeDiscount) values('$category','$subcategory','$productname','$productcompany','$productprice','$productdescription','$productscharge','$productavailability','$productimage1','$productimage2','$productimage3','$productpricebd')");
$_SESSION['msg']="Product Inserted Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Product</title>
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="shortcut icon" href="../assets/images/g.ico">
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

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
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 
  <li class="nav-item bg-light">

  <a class="nav-link active shadow-lg" aria-current="page" href="InsertProduct.php">Insert Product</a>
  </li>
  &nbsp;&nbsp;&nbsp;
  <li class="nav-item bg-light">
  <a class="nav-link  shadow-lg" href="ManageProduct.php">Manage Products</a>
  </li>
 
  &nbsp;&nbsp;&nbsp;

</ul>
<?php echo"<br>"?>
<div class="container font-weight-normal shadow-lg p-3 mb-4 bg-light rounded text-dark text-center">



					
							<div class="module-head">
								<h1>Insert Product</h1>
							</div>
							<div class="module-body">
							<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<strong>Great!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error alert-dismissible fade show" >
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

<form class="row g-2" name="insertproduct" method="post" enctype="multipart/form-data">
<div class="col-6 container">

<label class="control-label" for="basicinput">Category</label>
<div class="controls"><br>
<select name="category" class="form-select shadow-lg"  onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>
 <br>
									
 <div class="col-6 container">

<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls"><br>
<select   name="subcategory"  id="subcategory" class="form-select shadow-lg" required>
</select>
</div>
</div>
<br>
<?php echo"<br><br><br>" ?> 
<div class="col-6 container">

<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<br>
<input type="text"    name="productName"  placeholder="Enter Product Name"  class="form-control shadow-lg"  required>
</div>
</div>
<br>
<div class="col-6 container">

<label class="control-label" for="basicinput">Product Company</label>
<div class="controls"><br>
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" class="form-control shadow-lg" required>
</div>
</div>
<br>
<div class="col-6 container">

<label class="control-label" for="basicinput">Product Price Before Discount</label>
<div class="controls"><br>
<input type="text"    name="productpricebd"  placeholder="Enter Product Price" class="form-control shadow-lg" required>
</div>
</div>
<br>
<div class="col-6 container">

<label class="control-label" for="basicinput">Product Price After Discount(Selling Price)</label>
<div class="controls"><br>
<input type="text"    name="productprice"  placeholder="Enter Product Price" class="form-control shadow-lg" required>
</div>
</div>
<br>
<div class="control-group">
<label class="control-label " for="basicinput">Product Description</label>
<div class="controls"><br>
<textarea  name="productDescription"  placeholder="Enter Product Description" rows="6" class="form-control shadow-lg">
</textarea>  
</div>
</div>
<br>
<div class="col-6 container">
<label class="control-label" for="basicinput">Product Shipping Charge</label>
<div class="controls"><br>
<input type="text"    name="productShippingcharge"  placeholder="Enter Product Shipping Charge"  class="form-control shadow-lg" required>
</div>
</div>
<br>
<div class="col-6 container">
<label class="control-label" for="basicinput">Product Availability</label>
<div class="controls"><br>
<select   name="productAvailability"  id="productAvailability" class="form-select shadow-lg" required>
<option value="">Select</option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>
<br>
<p><div class='my-1'></div></p>
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Add Product Images </h1>

<div class="col-auto container">

<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls"><br>
<input type="file" name="productimage1" id="productimage1" value="" class="form-control shadow-lg"required>
</div>
</div>
<br>

<div class="col-auto container">

<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls"><br>
<input type="file" name="productimage2"  class="form-control shadow-lg" required>
</div>
</div>
<br>


<div class="col-auto container">

<label class="control-label " for="basicinput ">Product Image3</label>
<div class="controls"><br>
<input type="file" name="productimage3"  class="form-control shadow-lg">
</div>
</div>
<br>
<p><div class='my-1'></div></p>
	<div class="control-group">
											<div class="d-grid gap-2">
												<button type="submit" name="submit" class="btn btn-dark shadow-lg">Insert</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						<p><div class='my-1'></div></p>

			
						
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