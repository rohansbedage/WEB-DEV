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
<?php $conn = mysqli_connect('localhost', 'root', '', 'rohan'); 
error_reporting(0);?>


<html>
<body>
<div class="jumbotron jumbotron-fluid bg-light">
  <div class="container">

   
  <div class="container">
    <h1 class="display-4 text-center">Documentation Section</h1>

</div>
<div class="container my-5">
   
<form name="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" style="margin:auto;">



<div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Enter Your Mobile Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type='text' name="mbno" id='mbno'>
                        
                      </div>
                    </div>



                    <div class="form-group row pt-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Select Type of Document</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select name="type" class="form-control">
                          <option value="">Select Document</option>
                          <option value="adhar">adhar</option>
					<option value="cast">cast</option>
					<option value="income">income</option>
                        </select>
                      </div>
                    </div>
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">
<div class="container">


                    <input name="Submit" type="submit" value="Submit" class="btn btn-primary btn-lg btn-block"/>
</div></div></div></div></div></div></div></div></div></div></div></div>
</form>






<?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['mbno'];
    $name = $_POST['type'];

$sql = "SELECT $name  FROM doc where mbno=$mobile";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
if($row==0){

   include 'error.php';
}else{





?>
<div class="jumbotron jumbotron-fluid  bg-light text-center my-3">


   
  
   <h1> Download Your '<?php echo $name ;  ?>' Document</h1>
   <br>
    <a class="btn btn-primary" target="_blank" href="userdocsdownload.php?file=<?php echo $row[$name];  ?>">CLICK HERE</a>
    <h1></h1>

</div>



<?php


}
 }?>


</div>
</div>
</div>


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

</html>






