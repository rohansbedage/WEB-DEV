<?php 

error_reporting(0);
include('dbconnection.php');
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>Places</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
   
 

<style>
/* ===================================== */
section.content {
    margin: 50px 5px 0 315px;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}

/* ===================================== */



.card {
    background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
}
/* ===================================== */

.sidebar {
    
    width: 300px;
    
    
    position: fixed;
    top: 61px;
    left: 0;
    -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 11 !important;
}

/* ===================================== */

.sidebar .menu {
    position: relative;
    overflow-y: auto;
    height: 90vh;
}

.sidebar .menu .list {
    list-style: none;
    padding-left: 0;
}

/* ===================================== */


</style>


</head>


<body class="bg-white">
<div class="container ">
<header class="d-flex justify-content-center ">
      <ul class="nav nav-pills ">
     <h4> <li class="nav-item shadow-lg"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li></h4>  &nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="tourplaces.php" class="nav-link active">Tourists Places</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="touristhotels.php" class="nav-link active">Hotels</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="medi1.php" class="nav-link active">Village Health</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="placecategory1.php" class="nav-link active">Inside The Village</a></li></h4>&nbsp;&nbsp;&nbsp;
      
    </ul>
    </header>
  </div>
 <aside id="leftsidebar" class="sidebar">       
      
            
        <div class="card fixed-top">
  <div class="card-body text-dark">
  <h1 class="display-5">Village Places</h1>
  </div>
            </div>  
           
           
              <div class="menu bg-white">
 


        <ul class="list text-dark text-center ">
            <div class="container ">      

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 bg-white">
        <?php $query=mysqli_query($con,"select id,CategoryName,Description,PostImage from placecat");
while($row=mysqli_fetch_array($query))
{
?>



    
  <a href="placecategory1.php?catid=<?php echo htmlentities($row['id'])?>" class="list-group-item bg-white shadow-lg mx-2 list-group-item-action my-1"><?php echo htmlentities($row['CategoryName']);?></a>

  <?php } ?>  
  </div>   


                </ul>
            </div>
      
        </aside>
    

    <section class="content bg-white">
   
<div class="row mx-5 pb-5 mb-4 text-dark ">


<?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
             






     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM place";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select place.id as pid,place.PostTitle as posttitle,place.PostImage,placecat.CategoryName as category,placesubcat.Subcategory as subcategory,place.PostDetails as postdetails,place.PostingDate as postingdate,place.PostUrl as url from place left join placecat on placecat.id=place.CategoryId left join  placesubcat on  placesubcat.SubCategoryId=place.SubCategoryId where place.CategoryId='".$_SESSION['catid']."' and place.Is_Active=1 order by place.id desc LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
include "blank.php";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>


    
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ">
    <div class="card ">
   
    <a class="text-dark text-decoration-none" href="placedetails1.php?placeid=<?php echo htmlentities($row['pid'])?>">
 
    <button type="button " class="btn btn-white btn-lg shadow-lg">
 
 <br>

        <img class="card-img-top bg-white" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="Card image cap "  width="300" height="130">
<br>
<hr>

        <p class="lead display-4 ">
        
<a class="lead display-4 text-dark text-decoration-none " href=""> <b> <?php echo htmlentities($row['posttitle']);?> </b> </a>
        
        </p>
        
        
        </button>
        </a>
      
    
   <br>
</div>
        </div>        

        <?php } ?>    
  
    
    


</body>
</html>


    </section>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
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


</html><?php } ?>