<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<body class="be-splash-screen">

<div class="bg-light">

<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>
                <div class="page-title"><a href="home.php" class="text-dark"></a></div>


            
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="login.php" role="button" aria-expanded="false"><span class="icon mdi mdi-home"></span></a></li>

                                                      
                    </ul>
                </div>


              
        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->




    </div>
 <!----------------------------------------------------------------------------------------------------------------------------------->     






    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container forgot-password">
                    <br><br><br><br>
                    <div class="card card-border-color card-border-color-primary shadow-lg">
                        <div class="card-header"><img class="logo-img" src="includes/images/vlogo.jpeg" alt="logo" width="202" height="#{conf.logoHeight}"><span class="splash-description"><br> <b>Forgot your password?</b> </span></div>
                        <div class="card-body">
<div class="login-form">
    <form  method="post">
	<p>Don't worry, we'll send you an email to reset your password.</p>
	<br>
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Email" required="required">
			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">Send OTP</button>
        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="OTP" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-block btn-primary btn-xl" onclick="submit_otp()">Submit OTP</button>
        </div> 
		<br> <br>
    </form>
	</div>
                    <div class="splash-footer">&copy; 2021 The Village</div>
                </div>
            </div>
        </div>
    </div>
<script>
function send_otp(){
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'send_otp.php',
		type:'post',
		data:'email='+email,
		success:function(result){
			if(result=='yes'){
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
			}
		}
	});
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='dashboard.php'
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
		}
	});
}
</script>
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</div>
<br><br><br><br>  <br><br><br><br>     
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