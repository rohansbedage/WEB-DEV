<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$connect = mysqli_connect("localhost", "root", "", "rohan");
$nale = $_GET['id'];
$query2 = "SELECT * FROM schmedetail where cat='$nale' ORDER BY id DESC";
$result2 = mysqli_query($connect, $query2);
?>


<head>
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>Goverment Schemes</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

  <body class="bg-light">
  <style>
      div.scroll {
        background-color:white;
        width: 700px;
        height: 690px;
        overflow: auto;
        text-align: justify;
        padding: 20px;
      }

 

    </style>

  <?php include 'navslider.php';?> 
      




   
        <div class="row ">
            <div class="col-lg-5 col-xl-3 shadow-lg">
                <div class="card card-white grid-margin">
                    <div class="card-heading clearfix">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body user-profile-card mb-3">
                        <img src="includes/images/mh.png" class="user-profile-image " alt="" />
                        <h4 class="text-center h6 mt-2">Maharashtra government schemes </h4>
                        <p class="text-center small">Goverment of maharashtra</p>
                        <button class="btn btn-theme btn-sm">Follow</button>
                        <button class="btn btn-theme btn-sm">Message</button>
                    </div>
               
                  
                    <hr />
                    <div class="card-heading clearfix mt-3">
                        <h4 class="card-title">About</h4>
                    </div>
                    <div class="card-body mb-3">
                    <br>
                        <p >Goverment ,  Mahabaleshwar</p>
                    </div>
                    <hr />
                    <div class="card-heading clearfix mt-3">
                        <h4 class="card-title">Contact Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0 text-muted">
                                <tbody>
                                <tr>
                                        <th scope="row">Email:</th>
                                        <td>Goverment@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone:</th>
                                        <td>(+91) 9804411578</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address:</th>
                                        <td>Mahabaleshwar , Maharashtra</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class= "scroll col-lg-7 col-xl-6">
           <div class="profile-timeline ">
                 
           
<?php while($row = mysqli_fetch_array($result2))
{
 $pop = $row["name"];
 $lit = $row["des"];
 $date = $row["date"];
 $img = $row["pdf"];
 $ca = $row["cat"];  
?>
                    <div class="card shadow-lg">
                    <div class="card-header">
                    
                    </div>
                   <div class="card-body">
                   <h5 class="card-title"><b><?php echo $pop;?></b></h5>
                   <p class="card-text"><?php echo $lit; ?>.</p>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
                   <a target="_blank" href="download.php?file=<?php echo $img; ?>" class="btn btn-primary shadow">Download Details</a>
                  </div>                  
                  </div>

                  <?php } ?>              
                    
                    
      <!--------------------------------------------------------------------------------------------------------------->
                 
               
         <!---------------------------------------------------------------------------------------------------------->

                 
                </div>
                </div>
                   
         <!---------------------------------------------------------------------------------------------------------->
            <div class="col-lg-12 col-xl-3 my-5">
                <div class="card card-white  shadow-lg">


                    <div class="card-heading clearfix ">
                        <h4 class="card-title mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scheme Categories</h4>
                    </div><br>
                    <div class="card-body my-2">
                        <div class="team">
                            
                        <?php  
$connect = mysqli_connect("localhost", "root", "", "rohan");
$que = "SELECT * FROM schmecat";
$resu = mysqli_query($connect, $que);
 while($row = mysqli_fetch_array($resu))
{
 $cat = $row["schmename"];
?>    
                            <div class="team-member">
                                
<a class="btn btn-primary mx-2" href="schemescat.php?id=<?php echo $cat?>" role="button"><?php echo $cat?></a>
                                
                            </div>

                            <?php  }   ?>
                            
                          
<br><br><br><br>

                        </div>
                        
                    </div>
                    
                </div>

                <div class="card card-white grid-margin shadow-lg">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Some Info</h4>
                    </div>
                    <div class="card-body">
                    <p>Government Schemes in India are launched by the government to address the social and economic welfare of the citizens of this nation.These schemes play a crucial role in solving many socio-economic problems that beset Indian society, and thus their awareness is a must for any concerned citizen....</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
    </div>
  
</div>
</div>


<style type="text/css">
body {
    background:#eee;
    margin-top: 0px;
}
.page-inner.no-page-title {
    padding-top: 30px;
}
.page-inner {
    position: relative;
    min-height: calc(100% - 56px);
    padding: 20px 30px 40px 30px;
    background: #f3f4f7;
}
.card.card-white {
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: 0 0.05rem 0.01rem rgba(75, 75, 90, 0.075);
    padding: 25px;
}
.grid-margin {
    margin-bottom: 2rem;
}
.profile-timeline ul li .timeline-item-header {
    width: 100%;
    overflow: hidden;
}
.profile-timeline ul li .timeline-item-header img {
    width: 40px;
    height: 40px;
    float: left;
    margin-right: 10px;
    border-radius: 50%;
}
.profile-timeline ul li .timeline-item-header p {
    margin: 0;
    color: #000;
    font-weight: 500;
}
.profile-timeline ul li .timeline-item-header p span {
    margin: 0;
    color: #8e8e8e;
    font-weight: normal;
}
.profile-timeline ul li .timeline-item-header small {
    margin: 0;
    color: #8e8e8e;
}
.profile-timeline ul li .timeline-item-post {
    padding: 20px 0 0 0;
    position: relative;
}
.profile-timeline ul li .timeline-item-post > img {
    width: 100%;
}
.timeline-options {
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #f1f1f1;
    padding: 10px 0 10px 0;
}
.timeline-options a {
    display: block;
    margin-right: 20px;
    float: left;
    color: #2b2b2b;
    text-decoration: none;
}
.timeline-options a i {
    margin-right: 3px;
}
.timeline-options a:hover {
    color: #5369f8;
}
.timeline-comment {
    overflow: hidden;
    margin-bottom: 10px;
    width: 100%;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 5px;
}
.timeline-comment .timeline-comment-header {
    overflow: hidden;
}
.timeline-comment .timeline-comment-header img {
    width: 30px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
}
.timeline-comment .timeline-comment-header p {
    color: #000;
    float: left;
    margin: 0;
    font-weight: 500;
}
.timeline-comment .timeline-comment-header small {
    font-weight: normal;
    color: #8e8e8e;
}
.timeline-comment p.timeline-comment-text {
    display: block;
    color: #2b2b2b;
    font-size: 14px;
    padding-left: 40px;
}
.post-options {
    overflow: hidden;
    margin-top: 15px;
    margin-left: 15px;
}
.post-options a {
    display: block;
    margin-top: 5px;
    margin-right: 20px;
    float: left;
    color: #2b2b2b;
    text-decoration: none;
    font-size: 16px !important;
}
.post-options a:hover {
    color: #5369f8;
}
.online {
    position: absolute;
    top: 0px;
    right: 2px;
    display: block;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #ccc;
}
.online.on {
    background: #2ec5d3;
}
.online.off {
    background: #ec5e69;
}
#cd-timeline::before {
    border: 0;
    background: #f1f1f1;
}
.cd-timeline-content p,
.cd-timeline-content .cd-read-more,
.cd-timeline-content .cd-date {
    font-size: 14px;
}
.cd-timeline-img.cd-success {
    background: #2ec5d3;
}
.cd-timeline-img.cd-danger {
    background: #ec5e69;
}
.cd-timeline-img.cd-info {
    background: #5893df;
}
.cd-timeline-img.cd-warning {
    background: #f1c205;
}
.cd-timeline-img.cd-primary {
    background: #9f7ce1;
}
.page-inner.full-page {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}
.user-profile-card {
    text-align: center;
}
.user-profile-image {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
}
.team .team-member {
    display: block;
    overflow: hidden;
    margin-bottom: 10px;
    float: left;
    position: relative;
}
.team .team-member .online {
    top: 0px;
    right: 5px;
}
.team .team-member img {
    width: 40px;
    float: left;
    border-radius: 50%;
    margin: 0 5px 0 5px;
}
.label.label-success {
    background: #43d39e;
}
.label {
    font-weight: 400;
    padding: 4px 8px;
    font-size: 11px;
    display: inline-block;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>
  
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