<?php
session_start();
error_reporting(0);
include('includes/common.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>G-Store</title>
</head>
<style>
body {
  background-image: url('img/8.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

<!-------------------------------------------------------------------------------------------------------------------->

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
  <div class="container-fluid ">
    <a class="navbar-brand text-light" href="#">G-Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>

    

        <li class="nav-item">
          <a class="nav-link text-light" href="#"></a>
        </li>
    
     
      </ul>
      <li class=" d-inline-flex nav-item dropdown">
        <a class="nav-link link-dark dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <b>
          
          <?php


if (strlen($_SESSION['login'])) {
  
  echo ($_SESSION['username']);
} else {
  echo "My Account";
}
?>

</b>

          </a>
          <ul class="dropdown-menu  " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-dark" href="Myaccount.php"> <b> My account </b>
            </a></li>
            
            <li><a class="dropdown-item bg-transparent " href="myorders.php"> <b> My Orders </b> </a></li>
            <li><hr class="dropdown-divider "></li>

            <?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php" class="dropdown-item bg-transparent"> <b>  Login </b>  </a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php" class="dropdown-item  bg-transparent"> <b> Logout </b> </a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->
            
          </ul>
        </li>
      
       &nbsp;   &nbsp;   &nbsp;   &nbsp; 
       &nbsp;   &nbsp;   &nbsp;   &nbsp; 
       &nbsp;   &nbsp;   &nbsp;   &nbsp; 
        
    </div>
  </div>
</nav>

  <div class="bg-transparent text-white">
  <div class="card-body">
   <p><h1>Welcome To G-Store<?php if(strlen($_SESSION['login']))
    {   ?> :
				<?php echo htmlentities($_SESSION['username']);?>
				<?php } ?>                               !</h1></p> 
    <p class="card-text">Bored? How about playing? Powerful game consoles are here for all ! Forget your problems with our games as solutions !</p>
    <p class="card-text"><small class="text-muted"> It’s more than just a game.</small></p>
  </div>
  
</div>

  
    

    <!-------------------------------------------------------------------------------------------------------------------->
  
    <!--jumbotron Ends -->


    <div class="container my-4 py-5">
        &nbsp;

        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-white ">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4 mb-md-0  ">

                    <h2 class="font-weight-bold "><i> G-Store Gaming Section</i></h2>
&nbsp;
                    <p> 
              If you're interested in The Latest online versions of games ,<br> G-Store is
                        the perfect resource for you.
                        Click on <b>'Start Now'</b> To find seasonal versions of all your favorite games .
                        Also, you can browse the games by category.
                    </p>

                    <a class="btn btn-light " href="Product.php?cid=1" role="button">Start now<i
                            class="fa fa-gem ml-2"></i></a>

                    <hr class="my-5">

                    <p class="font-weight-bold"> *Flash Sale is on (Limited Period)</p>

                    <!--Facebook-->
                    <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>
                    <a href="#" class="mx-1" role="button"><i class="fab fa-stack-overflow"></i></a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-4 mb-md-0">

                    <!--img src="img/counter.png" class="img-fluid bg-transparent " alt=""-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


        </section> &nbsp;
        <div class="jumbotron alert-light">
  <div class="container">
    <h1 class="display-4"></h1>
    <p class="lead"></p>
  </div>
</div>
        <div class="container my-5 py-5 z-depth-1 shadow-lg p-4 mx-4 mb-5  bg-white rounded ">

            &nbsp;
            <!--Section: Content-->
            <section class="text-center px-md-5 mx-md-5 mb-0 dark-grey-text">

                <h3 class="font-weight-bold mb-4 pb-2">Presenting The Special Edition of Curent Time Gaming Blogs</h3>
                <h2 class="font-weight-bold mb-4 pb-2">G-Blog</h2>

                <p class="text-center mx-auto">Click On Below Link To Find More About Your Favourite Games !</p>

               
                <a href="blog.php" class="btn  btn-indigo btn-rounded btn-light">Visit G-Blog</a>



            </section>
            <!--Section: Content-->
 

        </div>
        <div class="jumbotron alert-light">
  <div class="container">
    <h1 class="display-4"></h1>
    <p class="lead"></p>
  </div>
</div>
        <div class="container my-5 z-depth-1 my-4">


            <!--Section: Content-->
            <section class="dark-grey-text">

                <div class="row pr-lg-5">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <img src="img/abc.png" class="img-fluid" alt="smaple image">
                        </div>

                    </div>
                    <div class="col-md-5 d-flex text-white align-items-center">
                        <div>

                            <h2 class="font-weight-bold mb-4">Official G-Store</h2>
                            <hr>
                            <p>Introducing The Roaring Graphics ,<br> Massive Screens , Overclocked
                                Processors & Incredible Designed CPU'S & More on One Platform </p>

                            <a href="Product.php?cid=1" class="btn btn-light">Visit G-Store</a>

                        </div>
                    </div>
                </div>

            </section>
            <!--Section: Content-->
        </div>

    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5>Video Games</h5>
        <p>This Is The Platform Where You Get All Types Of The Latest Games </p>
        <button class="btn btn-danger btn-sm ">Action Games</button>
        <button class="btn btn-primary btn-sm">Sport Games</button>
        <button class="btn btn-success btn-sm">Racing Games</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Gaming Setup!</h5>
        <p>Here You Get World's Best Gaming Hardwares & Trusted Products </p>
        <button class="btn btn-primary btn-sm">Gaming Monitors</button>
        <button class="btn btn-success btn-sm">Gaming Laptops</button>
        <button class="btn btn-danger btn-sm"> Gaming Chair</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Necessary Upgrades</h5>
        <p>Buy The Powerful & Highly Designed Products That Completes Your Requirements !</p>
        <button class="btn btn-danger btn-sm">Gaming Keyboards</button>
        <button class="btn btn-primary btn-sm">Extreme Upgrades</button>
        <button class="btn btn-success btn-sm">Gaming CPU'S</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>



<!----------------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

   
    <!-------------------------------------------------------------------------------------------------------------------->


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>