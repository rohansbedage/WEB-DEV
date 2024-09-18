
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
	$productname=$_POST['productName'];
	$productimage2=$_FILES["productimage2"]["name"];

//dir="productimages";
//unlink($dir.'/'.$pimage);


	move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/$pid/".$_FILES["productimage2"]["name"]);
	$sql=mysqli_query($con,"update  products set productImage2='$productimage2' where id='$pid' ");
$_SESSION['msg']="Product Image Updated Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Product Image 2</title>
		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
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
<div class="container font-weight-normal shadow-lg p-3 mb-4 bg-white rounded text-dark text-center">


					
<h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Product Info </h1>

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
										<button type="button" class="btn-close" data-dismiss="alert"></button>
									</div>
<?php } ?>



									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select productName,productImage2 from products where id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>



<label for="basic-url" class="form-label"></label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Product Name</span>
  <input type="text"    name="productName"  readonly value="<?php echo htmlentities($row['productName']);?>" class="form-control" required>

</div>
			
<br><br>			
<br><br>
<div class="control-group">

<div class="controls">
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" width="300" > 
</div>
</div>


<br><br>

<div class="control-group">

<label class="control-label" for="basicinput"><h1>New Product For Image : Image 2</h1></label>
<div class="controls"><br>
<input type="file" name="productimage2" id="productimage2" value="" class="form-control" required>
</div>
</div>




<?php } ?>
			
<br><br>
	<div class="control-group">
											<div class="d-grid gap-2">
												<button type="submit" name="submit" class="btn btn-dark">Update</button>
											</div>
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