<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM user WHERE email='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$val3 =date("Y/m/d");
date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:sa");
$tim = $time;
$ip_address=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
$city = $addrDetailsArr['geoplugin_city']; 
$country = $addrDetailsArr['geoplugin_countryName'];
ob_start();
system('ipconfig /all');
$mycom=ob_get_contents();
ob_clean();
$findme = "Physical";
$pmac = strpos($mycom, $findme);
$mac=substr($mycom,($pmac+36),17);
$ret=mysqli_query($con,"insert into usercheck(logindate,logintime,user_id,username,email,ip,mac,city,country)values('".$val3."','".$tim."','".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['login']."','$ip_address','$mac','$city','$country')");

$extra="home.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="login.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
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
</head>
<style>
    body{
           background:white;
}
</style>
  <body>
<div class="bg-light">

<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>
                <div class="page-title"><a href="home.php" class="text-dark">Login!</a></div>


            
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="login.php" role="button" aria-expanded="false"><span class="icon mdi mdi-home"></span></a></li>

                                                      
                    </ul>
                </div>


              
        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->




    </div>
 <!----------------------------------------------------------------------------------------------------------------------------------->     

   

<div class="row ng-scope">
    
    <div class="col-md-5">
        
    <div class="jumbotron jumbotron-fluid bg-light">
  <div class="container"> 
      
        <body class="be-splash-screen">
  
    <div class="be-wrapper be-login ">
      <div class="be-content">
          
        <div class="main-content container-fluid">
          <div class="splash-container ">
          <div class="container shadow-lg"><br>
    <h1 class="text-center">Find Your Account!</h1>
    
    
    <br>
  </div><br>
            <div class="card card-border-color card-border-color-primary shadow-lg">
              <div class="card-header"><img class="logo-img" src="includes/images/hlogo.png" alt="logo" width="{conf.logoWidth}" height="90"><span class="splash-description">Please enter your home number below.</span></div>
          
              <div class="card-body ">
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                  <div class="login-form">
                    <div class="form-group">
                      <input class="form-control" type="text" name="home"  placeholder="Home number" autocomplete="off">
                    </div>
  
                   
                    <div class="form-group row login-submit">
                    <div class="col-12">  <input  class="btn btn-primary btn-block" type="submit" value="Find Your Account">
                  </div>
                    </div>



                    
                 
                  </div>
                  
                </form>
                <?php
$connect = mysqli_connect("localhost", "root", "", "rohan");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$home = $_POST['home'];
$connect = mysqli_connect("localhost", "root", "", "rohan");
$query2 = "SELECT * FROM user WHERE home='$home'";
 $result2 = mysqli_query($connect, $query2);
 $saurabh = mysqli_num_rows($result2);
   if($saurabh==0){

    echo"no";
            }else{
while($row = mysqli_fetch_array($result2)){  

$pop = $row["email"];
?>



<div class="form-group">
                      <input class="form-control" type="text" name="home"  placeholder="<?php echo $pop; ?> " autocomplete="off">
                    </div>






<?php } 


}

}

?>


          </div>
            </div>
          </div>
        </div>
        
      </div>
      </div>
      </div>
    </div>
    </div>
  <!--------------------------------------------------------------------------------------------------------------------------->     
    
    <div class="col-md-7 bg-light">
        <div class="panel panel-default">
            <div class="panel-body">
            <div class="jumbotron jumbotron-fluid bg-light">
  <div class="container"> 
            
    <div class="be-wrapper be-login bg-light">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary shadow-lg">
              <div class="card-header"><img class="logo-img" src="includes/images/vlogo.jpeg" alt="logo" width="{conf.logoWidth}" height="80"><h1>Log in!</h1><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
              <p style="color:#F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
                        <form id="login-form" class="login-form" action="" method="post">
                   
                  <div class="login-form">
                    <div class="form-group">                        
                      <input class="form-control" id="username" type="email" name="email"  placeholder="Username" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                 

                      <input class="form-control" type="password" name="password" id="txtpassword" required="true" placeholder="Password">
                    </div>
                    <div class="form-group row login-tools">
                      <div class="col-6 login-remember">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="check1">
                          <label class="custom-control-label" for="check1">Remember Me</label>
                        </div>
                      </div>
                      <div class="col-6 login-forgot-password"><a href="forgotpassword.php">Forgot Password?</a></div>
                    </div>
                    <div class="form-group row login-submit">
                      <div class="col-6"><a class="btn btn-secondary btn-xl" href="registration.php" data-dismiss="modal" type="submit">Register</a></div>

                              

                      <div class="col-6"><button type="submit" name="login" class="btn btn-primary btn-xl">Log in</button></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> </div>
    </div>
  <!--------------------------------------------------------------------------------------------------------------------------->     




  
  <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>


</html>