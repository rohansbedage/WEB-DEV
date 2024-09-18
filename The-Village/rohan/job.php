<!DOCTYPE html>
<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>


<?php 

$connect = mysqli_connect("localhost", "root", "", "rohan");



$query2 = "SELECT * FROM joblist";
$result2 = mysqli_query($connect, $query2);



$row = mysqli_fetch_array($result2);
$name = $row["name"];
$des = $row["des"];
$img = $row["img"];

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Job Portal</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

<body class="bg-white">
  <?php include 'navslider.php';?> 
    

        <header class="d-flex justify-content-center py-3 bg-white">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="job.php" class="btn btn-primary btn-lg shadow-lg" aria-current="page"> &nbsp;Village Job List&nbsp;</a></li>
      &nbsp;  &nbsp;   &nbsp;   &nbsp;   <li class="nav-item"><a href="appliedjob.php" class="btn btn-primary btn-lg shadow-lg" aria-current="page">Applied Job List</a></li>

     
      </ul>
    </header>






        <div class="be-content">

    <style type="text/css">
    .blog-wrap {
	font-family: 'Open Sans', sans-serif;
	padding: 60px 0; 
}
.blog-left {
	padding-right: 40px;
}
.blog-post + .blog-post {
	margin-top: 35px;
}
.blog-post .content {
	padding-top: 25px;
}
.blog-post .content h3.title {
    font-weight: 500;
    margin-bottom: 10px;
    font-size: 22px;
}
.blog-post .content h3.title a {
	color: #000;
	text-decoration: none;
}
.featured-post img {
	width: 100%;
	border-radius: 10px;
}
.meta-post {
    padding: 0;
    margin: 0 0 20px;
    list-style: none;
    font-size: 13px;
}
.meta-post li {
	display: inline-block;
	margin-right: 15px; 
}
.meta-post li a {
	color: #8c8c8c;
	text-decoration: none;
}

.sidebar .widget {
    margin-bottom: 36px;
}
.widget-search form input {
    height: 40px;
    border: none;
    background: #f5f5f5;
    border-radius: 25px;
    padding: 0 20px;
    width: 100%;
    font-size: 13px;
}
.sidebar .widget .widget-title h3 {
    font-size: 20px;
    font-weight: 500;
    color: #2d2d2d;
    padding-bottom: 15px;
    margin-bottom: 22px;
    border-bottom: 1px solid #e5e5e5;
    position: relative;
}
.widget-categories > ul.cat-list {
	list-style: none;
	padding-left: 0;
}
.widget-categories > ul.cat-list > li {
    margin-bottom: 15px;
    font-weight: 400;
}
.widget-categories > ul.cat-list > li > a {
    color: #484848;
    position: relative;
    font-size: 12px;
    text-decoration: none;
}
.widget-categories > ul.cat-list > li > a .fas {
	font-size: 10px;
    margin-right: 9px;
    color: #989898;
}
.widget-tags ul.tag-list {
	padding: 0;
	margin: 0;
	list-style: none; 
}
.widget-tags ul.tag-list li {
	margin: 0 0 10px;
	display: inline-block;
}
.widget-tags ul.tag-list li a {
    display: inline-block;
    padding: 5px 15px;
    color: #8c8c8c;
    font-size: 12px;
    background-color: #f5f5f5;
    border-radius: 30px;
    text-decoration: none;
}

.blog-pagination {
	text-align: center;
	margin-top: 40px; 
}
.blog-pagination ul {
	padding: 0;
	margin: 0;
	list-style: none; 
}
.blog-pagination ul li {
	display: inline-block;
	padding: 0 5px; 
}
.blog-pagination ul li a {
	width: 45px;
    height: 45px;
    border-radius: 45px;
    display: block;
    border: solid 2px #e5e5e5;
    line-height: 42px;
    color: #32466a;
    text-decoration: none;
    font-size: 14px;
}
.blog-pagination ul li.prev a,
.blog-pagination ul li.next a {
	color: #f28b00;
}
.blog-pagination ul li.active a {
	background: #f28b00;
	border-color: #f28b00;  
	color: #fff;
}

/**Blog2**/
.bolg-post-list {
	padding: 0;
	margin: 0 -10px;
	list-style: none;
	display: flex;
	flex-wrap: wrap; 
}
.bolg-post-list>li {
	padding: 0 10px;
	width: 50%; 
	margin-bottom: 25px;
}    </style>
   
  	
		<div class="container my-3 ">

			<div class="row">
				<div class="col-md-9 blog-left ">

				<?php
            
            
            $connect = mysqli_connect("localhost", "root", "", "rohan");
            $query2 = "SELECT * FROM joblist";
            $result2 = mysqli_query($connect, $query2);



                while($row = mysqli_fetch_array($result2))
{
 $pop = $row["name"]; $lit = $row["des"]; $id = $row["id"]; $img = $row["img"]; 
?>
<div class="container shadow bg-light">
					<article class="blog-post ">
						<div class="featured-post">
							<a href="#">
								<img src="#" alt="">
							</a>
						</div>
						<div class="divider25"></div>
						<div class="content">
							<h3 class="title">
								<a href="#"><?php echo $pop; ?></a>
							</h3>
						
							<div class="entry-post">
								<p><?php echo $des; ?>.</p>
								<div class="more-link">
									<a href="jobdetails.php?id=<?php echo $id?>" class="btn btn-lg shadow-lg">Read More</a>
								</div>
							</div>
						</div>
                        <hr>
                      
						</div>
                        <br>
					</article>
                    <?php } ?>
					<hr>
				
				</div>
				<div class="col-md-3 sidebar ">
	
               

              
		
					<div class="widget widget-categories shadow-lg">
						<div class="widget-title">
							<h3>Categories</h3>
						</div>
						<ul class="cat-list">
                        <?php  

$connect = mysqli_connect("localhost", "root", "", "rohan");




$que = "SELECT * FROM jobcat";
$resu = mysqli_query($connect, $que);
 while($row = mysqli_fetch_array($resu))
{
 $cat = $row["name"];

 
 
?>
							<li>
								<a href="jobpost.php?id=<?php echo $cat?>"><i class="fas fa-chevron-right"></i> <?php echo $cat?><span>(03)</span></a>
							</li>
							
                            <?php  }   ?>	
						</ul>
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
        <script src="includes/assets/lib/prettify/prettify.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //-initialize the javascript
                App.init();

                //-Runs prettify
                prettyPrint();
            });
        </script>
</body>


</html>
