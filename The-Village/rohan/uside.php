<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['update']))
{
	$name=$_POST['name'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $Age=$_POST['Age'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
 
	$a=mysqli_query($con,"update user set name='$name',firstname='$firstname',lastname='$lastname',Age='$Age',mobile='$mobile',gender='$gender',address='$address', Paymentstatus='paid'  where email='".$_SESSION['login']."'");
  if($a)
  {
  }
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
  </head>
  <body class="">
  <?php include 'navslider.php';?> 
    


<!-------------------------------------------------------------------------------------------------------------------------------------->



<div class="main-content">
<div class="container-fluid mt--7">
<div class="row">
<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
<div class="card card-profile shadow">
<div class="row justify-content-center">
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
<a href="uside.php" class="btn btn-sm btn-info mr-4">My Account</a>
<a href="#" class="btn btn-sm btn-default float-right">Message</a>
</div>
</div>
<?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
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
<img src="includes/images/profile.png" alt="Admin" class="rounded-circle p-1" width="110">



</div>
</div>
<div class="text-center">
<h3>
 &nbsp; <?php echo $row['firstname'];?><span class="font-weight-light"> <?php echo $row['lastname'];?></span>
</h3>
<div class="container"> 
</div>	
<div class="h5 font-weight-300">
<i class="ni location_pin mr-2"></i><?php echo $row['firstname'];?> <?php echo $row['lastname'];?>
</div>
<div class="h5 mt-4">
<i class="ni business_briefcase-24 mr-2"></i>THE VILLAGE SYSTEM
</div>
<div>
<i class="ni education_hat mr-2"></i><?php echo $row['address'];?>
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
          <a type="button" class="btn  btn-primary btn-lg " href="chatbot/uside.php">Village ChatBot</a>
          <br><br>
        </div>
      </div>
    </div><br>


<?php } ?>
</div>
</div>


<div class="col-xl-8 order-xl-1">
<div class="card bg-light shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">My account</h3>
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
<div class="card-body">
<form method="post" enctype="multipart/form-data">
<h6 class="heading-small text-muted mb-4">User information</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-username">Username</label>
<input type="text" id="input-username"  name="name" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $row['name'];?>">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Email address</label>
<input type="email" id="input-email" name="email" class="form-control form-control-alternative" placeholder="" value="<?php echo $row['email'];?>" >
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">First name</label>
<input type="text" id="input-first-name" name="firstname"  class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['firstname'];?>">
</div>
</div>
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">Last name</label>
<input type="text" id="input-last-name" name="lastname" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['lastname'];?>">
</div>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group focused">&nbsp;

<label class="form-control-label" for="input-first-name">Select Gender</label><br>
<select class="form-control select" name="gender">
<option value="<?php echo $row['gender'];?>"><?php $a=$row['gender'];

											  if($a=='male')
												  {
												  echo "Male";
												  }
												    if($a=='female')
												  {
												  echo "Female";
												  }
												 
												  
												    if($a=='others')
												  {
												  echo "Others";
												  }
												 
												  
												  ?></option>

<option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Other</option>
                          
                        </select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-country">&nbsp;Age</label>
<input type="number" id="input-postal-code" name="Age" class="form-control form-control-alternative" value="<?php echo $row['Age'];?>" placeholder="">
</div>
</div>
</div>
</div>
<hr class="my-4">
<!-- Address -->

<h6 class="heading-small text-muted mb-4">Contact information</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Address</label>
<input id="input-address" class="form-control form-control-alternative" name="address" value="<?php echo $row['address'];?>" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Phone No.</label>
<input type="text" id="input-city" name="phone" class="form-control form-control-alternative" placeholder="City" value="<?php echo $row['mobile'];?>">
</div>
</div>
</div>

<hr class="my-4">


<?php } ?>
<div class="panel-footer">                                 
                                    <input type="submit" value="Update" name="update" class="btn btn-primary pull-right">
                                </div>
</div>

</form>
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
      
      	prettyPrint();
      });
    </script>
  </body>

</html>






