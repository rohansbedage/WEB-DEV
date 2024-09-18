<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	date_default_timezone_set('Asia/Kolkata');
	$currentTime = date('d-m-Y h:i:s A', time());


	if (isset($_POST['submit'])) {
		$sql = mysqli_query($con, "SELECT password FROM  admin where password='" . md5($_POST['password']) . "' && username='" . $_SESSION['alogin'] . "'");
		$num = mysqli_fetch_array($sql);
		if ($num > 0) {
			$con = mysqli_query($con, "update admin set password='" . md5($_POST['newpassword']) . "', updationDate='$currentTime' where username='" . $_SESSION['alogin'] . "'");
			$_SESSION['msg'] = "Password Changed Successfully !!";
		} else {
			$_SESSION['msg'] = "Old Password not match !!";
		}
	}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin Password</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script type="text/javascript">
			< link rel = "shortcut icon"
			href = "../assets/images/g.ico" >

				function valid() {
					if (document.chngpwd.password.value == "") {
						alert("Current Password Filed is Empty !!");
						document.chngpwd.password.focus();
						return false;
					} else if (document.chngpwd.newpassword.value == "") {
						alert("New Password Filed is Empty !!");
						document.chngpwd.newpassword.focus();
						return false;
					} else if (document.chngpwd.confirmpassword.value == "") {
						alert("Confirm Password Filed is Empty !!");
						document.chngpwd.confirmpassword.focus();
						return false;
					} else if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
						alert("Password and Confirm Password Field do not match  !!");
						document.chngpwd.confirmpassword.focus();
						return false;
					}
					return true;
				}
		</script>
	</head>

	<body>
		<?php include 'include/nav.php' ?>

		<div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-dark text-center">


			<div class="row g-3">
				<div class="container my-5 z-depth-1">

					<!--Section: Content-->
					<section class="dark-grey-text p-5">

						<!-- Grid row -->
						<div class="row">

							<!-- Grid column -->
							<div class="col-md-5 col mb-4 mb-md-0">

								<!-- div class="view">
      <img src="lg3.png" class=""  alt="">

      </div-->

							</div>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

							<!-- Grid column -->
							<div class="col-md-4 col mb-lg-1 ">
								<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">



									<h2>Admin Reset Password</h2>
									<br>

									<div class="module-body">

										<?php if (isset($_POST['submit'])) { ?>
											<div class="alert alert-success">
												<?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
												<button type="button" class="btn-close" data-dismiss="alert"></button>
											</div>
										<?php } ?>
										<br />



										<input type="password" class="form-control shadow-lg p-2 text-center bg-white rounded" name="password" aria-describedby="emailHelp" placeholder="Current Password" required>


										<input type="password" class="form-control shadow-lg p-2 my-4 text-center bg-white rounded" name="newpassword" aria-describedby="emailHelp" placeholder="Enter your new  Password" required>

										<input type="password" placeholder="Enter your new Password again" class="form-control shadow-lg p-2 text-center bg-white rounded" id="inputEmail" name="confirmpassword" aria-describedby="emailHelp" required>



										<div class="d-grid gap-2  mx-auto">
											<button type="submit" name="submit" class="btn  btn-block my-4  shadow-lg  text-center  bg-light rounded">Submit</button>

										</div>







										<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
										<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
										<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
										<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	</body>
<?php } ?>