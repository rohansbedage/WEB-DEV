<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];


    $Propertytax=$_POST['Propertytax'];
    $watertax=$_POST['watertax'];
	$email=$_POST['email'];
	$Penalty=$_POST['Penalty'];
	$password=$_POST['password'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gender'];
  $homero=$_POST['home'];
 
  $query1=mysqli_query($con,"select name from user where home='$homero'");
	$num1=mysqli_num_rows($query1);
	if($num1!=0)
	{ 
    $query2=mysqli_query($con,"select Paymentstatus from user where home='$homero' LIMIT 1");
    while($row = mysqli_fetch_array($query2))
        {
         $pop = $row["Paymentstatus"];
          } 
    
    if($pop=='paid'){
       $payment='paid';

    }else{
      $payment=0;

    }
  
	}else{
    $payment=0;
  }
	$query=mysqli_query($con,"select email from user where email='$email'");
	$num=mysqli_fetch_array($query);
	if($num>1)
	{
  echo "<script>alert('Email-id already register with us. Please try with diffrent email id.');</script>";
  echo "<script>window.location.href='registration.php'</script>";
	}
	else
	{
 mysqli_query($con,"insert into user(name,firstname,lastname,address,email,password,mobile,gender,Paymentstatus,home,Propertytax,watertax,Penalty) values('$name','$firstname','$lastname','$address','$email','$password','$mobile','$gender','$payment','$homero','0','0','0')");
 
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
      <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.cpassword.value)
{
alert('New Password and Re-Password field does not match');
document.signup.cpassword.focus();
return false;
}
return true;
}   

</script>
  <body class="bg-light">


 
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>
                <div class="page-title"><a href="home.php" class="text-dark">Registeration !</a></div>

              
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="login.php" role="button" aria-expanded="false"><span class="icon mdi mdi-home"></span></a></li>


                                                      
                    </ul>


                </div>
        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->


      
 
    <style type="text/css">
 

.card {
    margin-top: 1em;
}

/* IMG displaying */
.person-card {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>

<div class="container " style="margin-top: 7em;">
<form id="signup" name="signup" class="login-form" onsubmit="return checkpass();" method="post">

        <div class="card person-card shadow ">
            <div class="card-body  ">
              
                <img id="img_sex" class="person-img"
                    src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg">
                <h2 id="who_message" class="card-title">Please Enter Your information below.</h2>
            
                <div class="row">
                    <div class="form-group col-md-2">
                        <select id="input_sex" class="form-control">
                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5 ">
                        <input id="first_name" type="text" name="firstname" id="firstname" class="form-control" placeholder="First name">
                        <div id="first_name_feedback"  class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name" type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name">
                        <div id="last_name_feedback"  class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row ">
            <div class="col-md-6 " style="padding=0.5em;">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title">How to contact you ?</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                  
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" required="true">
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Phone number</label>
        <input type="text" name="phone" id="txtpassword" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required="true">                                 

                
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Home number</label>
                            <input type="text" name="home" class="form-control" required="true" >
                            <div class="phone-feedback">
                            
                            </div>
                        </div>  <div class="form-group my-3">
                            <label for="tel" class="col-form-label">Enter your address</label>
                            <input type="text" class="form-control my-3"  name="address" id="address" style="height: 100px" placeholder="" required>
                            <div class="phone-feedback">
                         
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
                
            <div class="col-md-6 shadow my-2">
            <div class="card-body ">
                        <h2 class="card-title ">Personal information !</h2>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Create username</label>
                            <input type="password" class="form-control" name="name" id="name" class="form-control" required="true" placeholder="username" required>
                            <div class="password_conf-feedback">
                            
                            </div>
                        </div>
                   
                            <label for="password_conf" class="col-form-label">Select gender &nbsp;</label>


                            <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" value="male" name="gender"  checked=""><span class="custom-control-label custom-control-color">Male</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" value="female" name="gender"><span class="custom-control-label custom-control-color">Female</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" value="other" name="gender"><span class="custom-control-label custom-control-color">Other</span>
                        </label>

                            <div class="password_conf-feedback">                         

                            </div>
                        </div>
                <div class="card "> 
                    <div class="card-body">
                        <h2 class="card-title">Securize your account !</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Pasword</label>

                            <input type="password" class="form-control" name="password" id="password" placeholder="Type your password" required="true">
                            <div class="password-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Pasword (confirm)</label>

                            <input  type="password" name="cpassword" id="cpassword" class="form-control"  placeholder="Type your password again" required="true">
                            <div class="password_conf-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">
        <input   class="btn btn-primary btn-lg btn-block" name="submit" value="Submit" type="submit" />
           
        </div>
        </form>
</div>	<script type="text/javascript">
	// URLs images
var female_img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo8PcCxh7tT6MDFhJi2UaAT9SeciHqvZuaWtGg0y0-yyP8rMDz";
var male_img = "https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg";

// On page loaded
$( document ).ready(function() {
    // Set the sex image
    set_sex_img();
    
    // Set the "who" message
    set_who_message();

    // On change sex input
    $("#input_sex").change(function() {
        // Set the sex image
        set_sex_img();
        set_who_message();
    });

    // On change fist name input
    $("#first_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#first_name").val()).code == 0) {
            $("#first_name").attr("class", "form-control is-invalid");
            $("#first_name_feedback").html(validation_name($("#first_name").val()).message);
        } else {
            $("#first_name").attr("class", "form-control");
        }
    });

    // On change last name input
    $("#last_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#last_name").val()).code == 0) {
            $("#last_name").attr("class", "form-control is-invalid");
            $("#last_name_feedback").html(validation_name($("#last_name").val()).message);
        } else {
            $("#last_name").attr("class", "form-control");
        }
    });
});

/**
*   Set image path (Mr. or Ms.)
*/
function set_sex_img() {
    var sex = $("#input_sex").val();
    if (sex == "Mr.") {
        // male
        $("#img_sex").attr("src", male_img);
    } else {
        // female
        $("#img_sex").attr("src", female_img);
    }
}

/**
*   Set "who" message
*/
function set_who_message() {
    var sex = $("#input_sex").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    
    if (validation_name(first_name).code == 0 || 
        validation_name(last_name).code == 0) {
        // Informations not completed
        $("#who_message").html("Please Enter Your information below.");
    } else {
        // Informations completed
        $("#who_message").html(sex+" "+first_name+" "+last_name);
    }
}

/**
*   Validation function for last name and first name
*/
function validation_name (val) {
    if (val.length < 2) {
        // is not valid : name length
        return {"code":0, "message":"The name is too short."};
    }
    if (!val.match("^[a-zA-Z\- ]+$")) {
        // is not valid : bad character
        return {"code":0, "message":"The name use non-alphabetics chars."};
    }
    
    // is valid
    return {"code": 1};
}	</script>

<br>
    
  
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