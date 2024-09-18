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
	$a=mysqli_query($con,"update user set name='$name',firstname='$firstname',lastname='$lastname',Age='$Age',mobile='$mobile',gender='$gender',address='$address' where email='".$_SESSION['login']."'");
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
    <title>Inbox</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css"/>
  </head>
  <body>
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
<span class="font-weight-light"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></span>
</h3>
<div class="container"> 
</div>	
<div class="h5 font-weight-300">
<i class="ni location_pin mr-2"></i><?php echo $row['name'];?>
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
<div>
<div >

<div class="main-content container-fluid">
          <div class="email-inbox-header">
            <div class="row">
              <div class="col-lg-6">
                <div class="email-title"><span class="icon mdi mdi-inbox"></span> Inbox <span class="new-messages"></span>  </div>
              </div>
              <div class="col-lg-6">
                <div class="email-search">
                  <div class="input-group input-search input-group-sm">
                    <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                      <button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="email-filters">
            <div class="email-filters-left">
              <div class="custom-control custom-checkbox be-select-all">
                <input class="custom-control-input" type="checkbox" id="check1">
                <label class="custom-control-label" for="check1"></label>
              </div>
              <div class="btn-group">
                
              <a class="btn btn-secondary" href="cmail.php" type="button" role="button"><i class="icon mdi mdi-email"></i> Compose Mail</a>

              </div>
              <div class="btn-group">
              <a class="btn btn-secondary" href="mail.php" type="button" role="button">All Complaints</a>
                
              </div>
             
            </div>
            <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
              <div class="btn-group email-pagination-nav">
                <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-left"></i></button>
                <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-right"></i></button>
              </div>
            </div>
          </div>
          <?php $rt=mysqli_query($con,"select * from ticket where email_id='".$_SESSION['login']."'");
     $num=mysqli_num_rows($rt);
if($num>0){

													while($row=mysqli_fetch_array($rt))
													{
													?> 
          
          <div class="email-list my-1">
              
            <div class="email-list-item email-list-item--unread">
              <div class="email-list-actions">
                <a class="favorite active" href="#"></a>
              </div>
              <div class="email-list-detail"><span class="date float-right"> <?php echo $row['admin_remark_date'];?></span><span class="from"> <a href="dmail.php?id=<?php echo $_SESSION['id']=$row['id'];?>"> <?php echo $row['subject'];?></span></a>
                <p class="msg"><?php echo $row['admin_remark'];?></p>
              </div>
            </div>
          
</div>

<?php } } else {?>
<h3 align="center" style="color:red;">No Record found</h3>
<?php } ?> 
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

</html>






