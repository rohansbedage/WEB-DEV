<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<?php
error_reporting(0);
$connect = mysqli_connect("localhost", "root", "", "rohan");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>POST-BOX</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css"/>
  </head>
  <body>
  <?php include 'navslider.php';?> 
   





  
    <style type="text/css">


        
#mycard {
            display: block;
        
            overflow: hidden;
            border-radius: 20px;
        
          
     
        }

    .blog-wrap {
	font-family: 'Open Sans', sans-serif;
	padding: 40px 0; 
}

}


   </style>
   
</head>
<body>

	<div class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 blog-left">
					<article class="blog-post">
						
<body class="bg-light">

    <div id="mycard" class="text-center ">
 
  <div class="jumbotron jumbotron-fluid bg-danger text-light ">
      <div class="container">
 <h1 class="display-2"><b>POST BOX</b> </h1>  
    <p class="lead">Here You Can Check Your Post Letter Status</p>
  


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
            <div class="form-group row mx-5">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
         
                      
                      <div class="col-sm-4 col-lg-3">
                    
                          <input class="form-control " name="mobile" type="password" required="" data-parsley-equalto="#pass2" placeholder="Enter Your Mobile No.">
                        </div>
                       
                        <input type="submit"  class=" col-12 col-sm-2 btn btn-primary btn-lg">
                        </form>
 

                    </div>
                    </div>
                 
            </div>
        
          
    

<?php

// collect value of input field



    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['mobile'];
    $query2 = "SELECT * FROM post WHERE mobile='$name'";
     $result2 = mysqli_query($connect, $query2);
     $saurabh = mysqli_num_rows($result2);
       if($saurabh==0){

        include 'error.php';
                }else{
     
     

   




?>
  

        <h4>    <table class="table table-hover  ">
  <thead>
    <tr><br>
      <th scope="col">#</th>
      <th scope="col">Recieved From</th>
      <th scope="col">Recieved Date</th>
      <th scope="col">Recived Time</th>
    </tr>
  </thead>
  <tbody>

    <tr >
    <?php
 
 while($row = mysqli_fetch_array($result2)){  

$pop = $row["des"];
$time = $row["time"];
$date = $row["date"];  ?>
      <th   scope="row">#</th>
      <td ><?php echo $pop; ?></td>
      <td ><?php echo $time; ?></td>
      <td ><?php echo $date; ?></td>
    </tr>
    
  </tbody>
  <?php }} ?>  
    
    
    <?php
       
         
      
      
     
     
     }   
 
 
     
     
       
         
         
 
 ?>
 
</table>
        </div>

    </div><?php} ?>
    </h4>
					</article>
          	
				

    <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

</html>