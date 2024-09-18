<?php 
session_start();
error_reporting(0);
include('includes/common.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>My Account</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



	</head>
    <body>
	
	
		<style>
    body {
  background-image: url('img/dark_city-wallpaper-1920x1080.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.container {
  background-image: url('img/	wp4771654-rdr-2-wallpapers.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

    &nbsp;
    <div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-dark text-center">



<nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="G-Store.php">Home</a>
        <a class="nav-link active" aria-current="page" href="Myaccount.php">My Account</a>
        <a class="nav-link" href="BillingAddress.php">Address</a>
        <a class="nav-link" href="contact_us.php">Contact</a>
      </nav>

<div class="container my-5 z-depth-1">

<br><br>


<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-5 mb-4 mb-md-0">

  <div class="view">
  <h1 class="display-6  text-light text-start" ><b>Gaming-Store </b></h1>
<hr class="bg-white mx-0  w-50" >
  <br>
<p class="lead fst-italic text-white text-start "> Contact info :
<br> Email: gstore.contact@gmail.com <br>
Phone: (+91) 8308660000 <br> <br>Address: <br>Gaming World ,Viman Nagar , Pune 

<br><br>Hours of Operation: <br>
Monday - Friday
10:00 am - 7:30 pm<br><br> <br>
</p>
 
</h4>

  </div>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-6 my-4 mb-lg-0 mb-4">

  <!-- Form -->
  <form class="mx-md-5"method='post' action='user_registration_script.php'>

  <h1 class="text-center font-weight-bold text-light mt-3 mb-5">Contact Us</h1>

  <div class="md-form md-outline mt-0">
              <input type="text" id="name" class="form-control text-dark" name="name" placeholder="Your Name" >
              <label for="name" ></label>
            </div>
            <div class="md-form md-outline">
            <input type="email" class="form-control" name="email" required="true"  placeholder="Your Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              <label for="email"></label>
            </div>
          
            <!-- Message -->
            <div class="md-form md-outline">
            <input type="text" id="message"class="md-textarea form-control" placeholder="Your Message" name="message" rows="3" >
              
              <label for="message"></label>
            </div>

            <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Submit inquiry</button>

&nbsp;
</form>
</div>

    &nbsp;
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

    

	
</body>
</html>
<?php } ?>
