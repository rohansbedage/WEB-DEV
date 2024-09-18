<?php
session_start();
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
  <?php
$connect = mysqli_connect("localhost", "root", "", "rohan");
date_default_timezone_set("Asia/Kolkata");



$query3="delete from breakingnews where DATEDIFF(now(), breakingnews.Post_Date) > 1;";
$saurabh = mysqli_query($connect, $query3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">


        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        </style>
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
    <!--head-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    
    <!--start code-->
    <div class="row py-2">
        <!--Breaking box-->
        <div class="col-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
            <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
                <span class="fas fa-bolt" title="Breaking News"></span>
                <span class="d-none d-md-inline-block">Breaking</span>
            </div>
        </div>
        <!--Breaking content-->
        <div class="col-11 col-md-9 col-lg-10 pl-1 pl-md-2">
            <div class="breaking-box pt-2 pb-1">
           
                <!--marque-->
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
                <?php 
                $connect = mysqli_connect("localhost", "root", "", "rohan");



                $query = "SELECT * FROM breakingnews    ";
                $result = mysqli_query($connect, $query);
                
                while($row = mysqli_fetch_array($result))
{
 $pop = $row["Name"];
 $lit = $row["des"];

 
?>
                
                  <a class="h4 font-weight-light"><span class="position-relative text-uppercase mx-2 badge badge-primary rounded-0"><?php echo $pop; ?></span> <?php echo $lit; ?></a>
                 
               
               <?php   }  ?>
               
                </marquee>
            </div>
        </div>
    </div>
	<!--end code-->
	

</div>	
<div class="jumbotron jumbotron-fluid bg-light text-center">
  



<div class="jumbotron jumbotron-fluid bg-light ">
  <div class="container">
<div class="w3-content w3-display-container mx-5">
  <img class="mySlides" src="includes/images/14.jpeg" width="1110rem" height="380em">
  <img class="mySlides" src="includes/images/15.jpeg" width="1110rem" height="380em">
  <img class="mySlides" src="includes/images/16.jpeg" width="1110rem" height="380em">
 

&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  


<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<div class="container px-4 py-5 my-3" id="hanging-icons">
    <h2 class="pb-2 border-bottom"><b>Important</b> </h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <div>
          <h2>Schedule</h2>
          <p>Click here to know the details about electricity schedule of the week ,<br> it helps you to make your schedule proper .</p>
          <a href="ele.php" class="btn btn-primary">
            Schedule
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
        </div>
        <div>
          <h2>Healthcare</h2>
          <p>Click Below to know more about village health or to know about Availablility of hospitals and vaccination centers .</p>
          <a href="medi.php" class="btn btn-primary">
          Healthcare
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
        </div>
        <div>
          <h2>Contacts</h2>
          <p>Click here to know the departmental contact numbers with gmail id and name details. So, you cant contact them easily.</p>
          <a href="contacts.php" class="btn btn-primary">
            Important Contacts
          </a>
        </div>
      </div>
    </div>
  </div>

<?php include 'notice.php'; ?>


<hr>

<div class="jumbotron jumbotron-fluid text-center bg-light">
  <div class="container">
    <h1 class="display-4">Services</h1>
    <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom"></h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h2>Job Portal</h2>
        <p>Providing you with our wide database of job opportunities notified by numerous companies. You can add filters to search your desired jobs and still have a list of options to choose from..</p>
        <a href="job.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h2>Healthcare</h2>
        <p>Health care (also health-care or healthcare) is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people. </p>
        <a href="medi.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h2>Post-Box</h2>
        <p>Know your status of your Letter/parcel  online On one click with this Feature to Know more about it Click Link below.</p>
        <a href="post.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>






    </div>
    
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h2>Market Prices</h2>
        <p>The market price is the current price at which an asset or service can be bought or sold. The market price of an asset or service is determined by the forces of supply and demand. The price at which quantity supplied equals quantity demanded is the market price.</p>
        <a href="market.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h2>Village schemes</h2>
        <p>Government Schemes in India are launched by the government to address the social and economic welfare of the citizens of this nation.These schemes play a crucial role in solving many socio-economic problems that beset Indian society, and thus their awareness is a must for any concerned citizen..</p>
        <a href="schemes.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h2>Village Places</h2>
        <p>We are giving information about essential places in the villages which are important to the villagers like colleges, stores, factories, hospital, etc.</p>
        <a href="placecategory.php" class="icon-link">
          Click here
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>






    </div>






  </div>
  </div>
</div></div>
</div>

<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">The Village </h2> <p>(The Village)</p>

    
 
      
    </div>
  </div>



<script type="text/javascript">

</script>

<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/masonry-layout/masonry.pkgd.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();

        });

        $(window).on('load', function() {
            App.pageGallery();
        });
    </script>
</body>


</html>