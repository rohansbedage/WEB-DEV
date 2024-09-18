

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
  <body class=" bg-white ">
    



<!-------------------------------------------------------------------------------------------------------------------------------------->



<div class="main-content my-5">
<div class="container-fluid mt--7 my-5">
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
<a href="../uside.php" class="btn btn-sm btn-primary mr-4">My Account</a>
<a href="#" class="btn btn-sm btn-default float-right">Message</a>
</div>
</div>


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



</div>
</div>
<div class="text-center">
<div class="jumbotron jumbotron-fluid bg-white shadow-lg">
  <div class="container">
    <h1 class="display-4">Village ChatBot</h1>
    <p class="lead my-4"> This is a most Advanced System. The Purpose of system is to Solve Your Issues Very Quickly !</p>
  </div>
</div>
<hr>


<div class="row align-items-md-stretch">
  
      <div class="col-md-6 ">
      <div class="text-dark shadow  border rounded-3 ">
         <br>
         <a type="button" class="btn shadow btn-lg bg-primary  " href="../tax.php">Pay Your Tax</a>
          <br><br>
        </div>
      </div>
     
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3 ">
         <br>
         <a type="button" class="btn bg-primary btn-lg " href="../mail.php">Complaint Mail</a>
          <br><br>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="row align-items-md-stretch mx-2">
  
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3 ">
         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a type="button" class="btn btn-primary btn-lg " href="../userdocs.php">Documentation</a>
          <br><br>
        </div>
      </div>
     
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3">
         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a type="button" class="btn  btn-primary btn-lg " href="uside.php">Village ChatBot</a>
          <br><br>
        </div>
      </div>
    </div><br>



</div>
</div>


<div class="col-xl-8 order-xl-1 bg-white">
<div class="card  bg-white shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8 my-3">
<h3 class="mb-0">VILLAGE ChatBot</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-md btn-primary">Settings</a>
</div>

</div>
</div>

<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>

   
   
              
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'portal';  ?>
     
         
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section> 
     





    
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






