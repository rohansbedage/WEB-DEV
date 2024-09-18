<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['update']))
{
	
  $a=mysqli_query($con,"update user set  Paymentstatus='paid'  where email='".$_SESSION['login']."'");
  if($a)
  {
  }
  header("Location: tax.php");
}

?>

							
							
							
								
						
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
 
</head>
  <body>
  <?php include 'navslider.php';?> 
  
  <!-------------------------------------------------------------------------------------------------------------------------------------->

  <div class="main-content ">
    <div class="container-fluid mt--7 ">
      <div class="row ">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0 noprint ">
          <div class="card card-profile shadow ">
            <div class="row justify-content-center ">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="uside.php" class="btn btn-sm btn-primary mr-4">My Account</a>
                <a href="cmail.php" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>

            <?php
            $query = mysqli_query($con, "select * from user where email='" . $_SESSION['login'] . "'");
            while ($row = mysqli_fetch_array($query)) {
            ?>

              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="" alt="Admin" class="rounded-circle p-1" width="110">

                  </div>
                </div>
                <div class="text-center">
                  <h3>
                    <span class="font-weight-light"><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></span>
                  </h3>
                  <div class="container">
                  </div>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i><?php echo $row['name']; ?>
                  </div>
                  <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>THE VILLAGE SYSTEM
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i><?php echo $row['address']; ?>
                  </div>
                  <hr>

                  <div class="row align-items-md-stretch">

                    <div class="col-md-6 ">
                      <div class="text-dark  shadow border rounded-3 bg-light">
                        <br>
                        <a type="button" class="btn btn-primary btn-lg " href="tax.php">Pay Your Tax</a>
                        <br><br>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="text-dark  shadow border rounded-3 bg-light">
                        <br>
                        <a type="button" class="btn btn-primary  btn-lg " href="mail.php">Complaint Mail</a>
                        <br><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row align-items-md-stretch mx-2">

                <div class="col-md-6">
                  <div class="text-dark  shadow border rounded-3 bg-light">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="button" class="btn btn-primary btn-lg " href="userdocs.php">Documentation</a>
                    <br><br>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="text-dark  shadow border rounded-3 bg-light">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="button" class="btn  btn-primary btn-lg " href="chatbot/chat.php">Village ChatBot</a>
                    <br><br>
                  </div>
                </div>
              </div><br>

            <?php } ?>
          </div>
        </div>
<!------------------------------------------------------------------------------------------>



<div class="col-xl-8 order-xl-1">
<div class="card bg-light shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Payment</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>

<?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?>

&nbsp;

<div class="card-body mx-8 my-3  ">

<?php } ?>

<div class="container mx-8 ">
<div class="container mx-8 ">

	<aside class="mx-8 col-md-7 ">


<article class="card shadow-lg ">
<div class="card-body   p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
		<i class="fa fa-university"></i>  Bank Transfer</a></li>
</ul>
<?php
$query=mysqli_query($con,"select Paymentstatus from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?>
<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="username">Full name (on the card)</label>
		<input type="text" class="form-control" name="username" placeholder="" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  required="true">
	</div> 
   
  
</body>
</html>

	<div class="form-group">
		<label for="cardNumber">Card number</label>
		<div class="input-group">
			<input type="text" class="form-control" name="cardNumber" placeholder="" maxlength="10"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[789][0-9]{9}"
            required="true" pattern=".{6,}">
			<div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
					<i class="fab fa-cc-mastercard"></i> 
				</span>
			</div>
		</div>
	</div> <!-- form-group.// -->

	<div class="row">
	    <div class="col-sm-8">
	        <div class="form-group">
	            <label><span class="hidden-xs">Expiration</span> </label>
	        	<div class="input-group">
	        		<input type="Expiration" class="form-control" placeholder="MM" name=""  maxlength="2 " pattern=".{2,}"  required="true">
		            <input type="Expiration" class="form-control" placeholder="YY" name=""  maxlength="4 " pattern=".{4,}"  required="true">
	        	</div>
	        </div>
	    </div>
	    <div class="col-sm-4">
	        <div class="form-group">
	            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
	            <input type="cvv" class="form-control"  maxlength="3 " pattern=".{3,}" required="true">
	        </div> <!-- form-group.// -->
	    </div>
	</div> <!-- row.// -->
  <input  class="subscribe btn btn-primary btn-block" href="" role="button" type="submit" value="Update" name="update" >
	
	</form>





</div> <!-- tab-pane.// -->
<?php } ?>



					
<div class="tab-pane fade" id="nav-tab-bank">
<p>Bank accaunt details</p>
<dl class="param">
  <dt>BANK: </dt>
  <dd> THE WORLD BANK</dd>
</dl>
<dl class="param">
  <dt>Accaunt number: </dt>
  <dd> 12345678912345</dd>
</dl>
<dl class="param">
  <dt>IBAN: </dt>
  <dd> 123456789</dd>
</dl>
<p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. </p>
</div> <!-- tab-pane.// -->
</div> <!-- tab-content .// -->

</div> <!-- card-body.// -->
</article> <!-- card.// -->


	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br>
</div>

</form>

<!------------------------------------------------------------------------------------------------------------------------->

































<!------------------------------------------------------------------------------------------------------------------------->
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="row align-items-center justify-content-xl-between">
<div class="col-xl-6 m-auto text-center">

</div>
</div>
</footer>

</body>
	<script type="text/javascript">
		</script>
</body>
</html>






    
    <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script src="includes/assets/lib/prettify/prettify.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      
      	//-Runs prettify
      	prettyPrint();
      });
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/layouts-offcanvas-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:43:56 GMT -->
</html>






