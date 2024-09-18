<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE name='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dash.php";
$_SESSION['alogin']=$_POST['email'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();
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
    
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>





<body class="be-splash-screen">
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header"><h1>Sign in to Admin</h1><span class="splash-description">Please enter your username and password Below.</span></div>
                        <div class="card-body">
                        <form id="login-form" class="login-form" action="" method="post">
         <p style="color: #F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
                                <div class="form-group">
                                <input type="text" name="email" id="txtusername" class="form-control" placeholder="Username" autocomplete="off"> 
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" id="txtpassword" class="form-control" placeholder="Password"> 
                                
                                </div>
                                <div class="form-group row login-tools">
                                    <div class="col-6 login-remember">
                                     
                                    </div>
                                    <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">Forgot Password?</a></div>
                                </div>
         

                                <div class="form-group login-submit">
                                <button class="btn btn-primary btn-xl" name="login" type="submit">Login</button>  
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>







<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
        });
    </script>
</body>


</html>