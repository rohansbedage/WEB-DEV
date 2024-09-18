<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>


<?php

if(isset($_GET['id']))
{
  $main_id = $_GET['id'];
  $sql_update = mysqli_query($con,"UPDATE message SET status=1 WHERE id='$main_id'");
}

?>
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
</head>

  <body class="bg-light">


 
 <!--div class="scroll"-->

    
 <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>

<div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/images/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                            
                            <?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?> 
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name"><?php echo $row['name'];?></div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="uside.php"><span class="icon mdi mdi-face"></span>Account</a>
                                <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                            <?php } ?>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>

                                                      
               
</ul>                                          <?php
    
    $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=0");
    $count = mysqli_num_rows($sql_get);
      ?>
           
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
                        
                            
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge my-1 rounded-pill bg-light"><?php echo $count; ?></span></a>
                        
                        <ul class="dropdown-menu be-notifications ">
                                <li>

                            <div class="title shadow-lg">Notifications<span class="badge badge-pill"><?php echo $count; ?></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications bg-light">
                                            <div class="content">
                                              
                                                <ul>

                                                <ul class="list-group">
  <li >


                                                <?php
            $sql_get1 = mysqli_query($con,"SELECT * FROM message WHERE status=0");
            if(mysqli_num_rows($sql_get1)>0)
            {
              while($result = mysqli_fetch_assoc($sql_get1))
              {
                echo '<a class=" list-group-item  text-uppercase   border border-white shadow my-1  text-center text-primary" href="read_notification.php?id='.$result['id'].'">'.$result['name'].'</a>';
         
              }

            }
            else
            {
              echo '<a class="dropdown-item text-danger list-group-item  text-center text-uppercase bg-light  font-weight-bold" aria-current="true" href="#"><i class="far fa-frown-open"></i>Sorry! No Messages</a>';

            }
            
            ?>
            
          </li>
        </ul>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="footer"> <a href="#">All notifications</a></div>
                                </li>

 


        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->





<nav class="be-right-sidebar ">
            <div class="sb-content">
                <div class="tab-navigation ">
                
                </div>
                <div class="tab-panel ">
                    <div class="tab-content"> 
                        <div class="tab-pane tab-chat active" >
                            <div class="chat-contacts">
                                <div class="chat-sections">
                                    <div class="be-scroller-chat bg-white">
                                        <div class="content ">
                                        <div class="jumbotron jumbotron-fluid bg-white sticky-top shadow-lg">
 
    <h1 class="display-4 text-center "> Services</h1>

</div>
<div class="container"> 

                                            <a class="btn btn-light shadow-sm btn-lg btn-block shadow-lg" href="job.php" role="button">Job Portal</a>
                               <hr>
                                <a class="btn btn-light  btn-lg btn-block shadow-lg" href="post.php " role="button">POST-BOX</a>
                                <hr>
                                <a class="btn btn-primary  shadow-sm btn-lg btn-block shadow-lg" href="tax.php " role="button">PAY TAX</a>
                                <hr>  <a class="btn btn-light shadow-sm btn-lg btn-block shadow-lg" href="market.php " role="button">Market Prices</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="mail.php " role="button">Complaint Mail</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="placecategory.php" role="button">Village Places</a>
                        
                                </div>
                                     <div class="">
                                                <div class="user">
                                                    <a href="post.php">
                                                        <div class="user-data"><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                            </div>
                            
                        </div>
                     
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

  <br>
  





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Carrer List - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    body{
    background:#f5f5f5;
    margin-top:20px;}

/* ===== Career ===== */
.career-form {
  
  border-radius: 5px;
  padding: 0 16px;
}

.career-form .form-control {

  border: 0;
  padding: 12px 15px;

}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
 
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */

}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */

}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */

}

.career-form .custom-select {
 
  border: 0;
  padding: 12px 15px;
 
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}

.career-form .select-container:before {
  position: absolute;
  right: 15px;
  top: calc(50% - 14px);
  font-size: 18px;
  
  content: '\F2F9';
  font-family: "Material-Design-Iconic-Font";
}

.filter-result .job-box {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
  padding: 10px 35px;
}

ul {
  list-style: none; 
}

.list-disk li {
  list-style: none;
  margin-bottom: 12px;
}

.list-disk li:last-child {
  margin-bottom: 0;
}

.job-box .img-holder {
  height: 65px;
  width: 65px;

  font-family: "Open Sans", sans-serif;

  font-size: 22px;
  font-weight: 700;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 65px;
}

.career-title {
  
  padding: 15px;
  text-align: center;
  border-radius: 10px 10px 0 0;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
}

.job-overview {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .job-overview {
    position: -webkit-sticky;
    position: sticky;
    top: 70px;
  }
}

.job-overview .job-detail ul {
  margin-bottom: 28px;
}

.job-overview .job-detail ul li {
  opacity: 0.75;
  font-weight: 600;
  margin-bottom: 15px;
}

.job-overview .job-detail ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.job-overview .overview-bottom,
.job-overview .overview-top {
  padding: 35px;
}

.job-content ul li {
  font-weight: 600;
  opacity: 0.75;
  border-bottom: 1px solid #ccc;
  padding: 10px 5px;
}

@media (min-width: 768px) {
  .job-content ul li {
    border-bottom: 0;
    padding: 0;
  }
}

.job-content ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}
.mb-30 {
    margin-bottom: 30px;
}    </style>

</head>
<body>

<div class="container">
            <div class="row">
              
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto ">
                    <div class="career-search  mb-60">

                        <form action="#" class="career-form bg-primary mb-60">
                            <div class="row ">
                            
                                <div class="col-md-12 display-4 text-light text-center col-lg-12  my-5">
                                        Notifications
                                 
                                </div>
                            </div>
                        </form>

                        <div class="filter-result">
                    <br>

                         
<!--------------------------------------------------------------------------------------------------------------------->
<?php 
        $sr_no=1;
        $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status='1' ORDER BY id DESC");
        while($main_result = mysqli_fetch_assoc($sql_get)) :?>
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center">
                                    <div class="img-holder bg-primary text-light mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    <?php echo $sr_no++; ?>
                                    </div>
                                    <div class="job-content">
                                        <h4 class="text-center text-dark text-md-left"><?php echo $main_result['name'];?> &nbsp; ( <?php echo $main_result['cr_date'];?>)</h4>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                             <h4>  <i class="zmdi zmdi-pin mr-2"></i> <?php echo $main_result['message'];?></h4> 
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                              
                            </div>
                            <?php endwhile ?>
<!--------------------------------------------------------------------------------------------------------------------->


                </div>
            </div>

        </div>	<script type="text/javascript">
		</script>
</body>
</html>


  <div class="container bg-light shadow-lg">
    
  <div class="container bg-light">

 
  <div class="container ">
    <h3 class="display-6"></h3>
      
</div>
    <p class="lead"></p>

</div>

</div>
</div>




 
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