<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>
<style>
body {
  background-image: url('includes/images/famousplaces/.jpg');
}
</style>
  <body class="bg-light">


  <?php include 'navslider.php';?> 
   <body class="main-layout">
   <div class="jumbotron jumbotron-fluid bg-light shadow-lg">
  <div class="container">
  <h1 class="display-4 text-center">Electricity Schedule</h1>
  <br><br>
      <div class="titlepage">  

      </div>
      <?php
$result=file_get_contents('https://spreadsheets.google.com/feeds/list/1afRXh38zzX6cI8PD8JL2WUPTGKqdoEsk7TLjrn-XwmI/od6/public/basic?alt=json');

$arr=json_decode($result,true);
$data=$arr['feed']['entry'];
?>
<table class="table table-bordered table-dark">
  
	<?php 
	$i=1;
	foreach($data as $list){
		$str=$list['content']['$t'];
		$arr=explode(",",$str);
		$emailArr=explode(":",$arr[0]);
        $avak=explode(":",$arr[1]);
        $kiman=explode(":",$arr[2]);
        $kamal=explode(":",$arr[4]);
        
		echo "<tr>
			        <td>".$emailArr[1]."</td>
            <td>".$avak[1]."</td>
            <td>".$kiman[1]."</td>
            
			
            
			
		
		</tr>";
		$i++;
	}
	?>
</table></br></br>








      
    <br><br><br>
    <br><br><br><br><br><br>
      <!-- end footer -->
      <!-- Javascript files-->
      
   </body>
</html>

