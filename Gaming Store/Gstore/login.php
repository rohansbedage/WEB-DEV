<?php
session_start();
error_reporting(0);
include('includes/common.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");

}
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);

if($num>0)
{
$extra="G-Store.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Login!</title>
  <script type="text/javascript">
    function valid() {
      if (document.register.password.value != document.register.confirmpassword.value) {
        alert("Password and Confirm Password Field do not match  !!");
        document.register.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
  <script>
    function userAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
          $("#user-availability-status1").html(data);
          $("#loaderIcon").hide();
        },
        error: function () { }
      });
    }
  </script>
</head>

<body>

  <style>
    body {
      background-image: url('img/crevasse-wallpaper-.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;


    }

    .container {
      background-image: url('img/coconut_tree_blac.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;

    }
  </style>






  <div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-dark text-center">


    <div class="row g-3">

      <div class="container my-5 z-depth-1">

        <section class="dark-grey-text p-5">

          <div class="row">

         
            <div class="col-md-5 col mb-4 mb-md-0">



            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div class="col-md-4 col mb-lg-1 ">

              <form method="post">


                <p class="h4 mb-4 display-6  my-5 text-center">Log in</p>

                <br>
                <input type="email" class="form-control shadow-lg p-2 text-center bg-white rounded" id="email"
                  name="email" aria-describedby="emailHelp" placeholder="E-mail">

                <input type="password" class="form-control my-4 shadow-lg p-2 text-center bg-white rounded"
                  id="password" name="password" placeholder="Password">

                <div class="d-grid gap-2  mx-auto">
                  <button type="submit" name="login"
                    class="btn  btn-block my-4  shadow-lg  text-center  bg-light rounded">Sign in</button>

                </div>



                <p class="text-center">Not a member?
                  <a href="signup.php">Register</a>
                </p>



                &nbsp;
              </form>

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>


</body>

</html>