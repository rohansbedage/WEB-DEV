<?php 
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>    
    
  </head>
  <body>


<!------------------------------------------------------Head Navbar The Village-------------------------------------------------------------------------->

<div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
      
          <div class="page-title"><span> Admin Panel </span></div>

		  <div class="page-title"><span>Dashboard</span></div>
          <div class="be-right-navbar">
		        <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/profile/1.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">The Village Admin</div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="adminprofile.php"><span class="icon mdi mdi-face"></span>Account</a>
                                <a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                        </li>
               </ul>          
         </div>    

<!--------------------------------------------------------Side Menu The Village-------------------------------------------------------------------->

<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
				  
                <ul class="sidebar-elements">
					
                  <li class="active"><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>
<!------------------------------------------------------------------------------------------------------------------------------------->

                <li class="divider">Important</li>

<!------------------------------------------------------------------------------------------------------------------------------------->

  <li class="parent"><a href="#"><i class="icon mdi mdi-notifications-active"></i><span>Notification</span></a>
                    <ul class="sub-menu">
                      <li><a href="sendnotification.php">Send Notification</a>
                      </li>
                      <li><a href="viewallnotification.php">Manage notifications</a>
                      </li>
  
                      
                    </ul>
                  </li>

                  <li class="parent "><a href="#"><i class="icon mdi mdi-alert-triangle"></i><span> Breaking </span></a>
                    <ul class="sub-menu">
                      <li><a href="breaking.php">Breaking News</a>
                      </li>
                      <li><a href="importantnotice.php">Important Notices</a>
                      </li>
                    
                    </ul>
                  </li>

				  <li class="parent "><a href="#"><i class="icon mdi mdi-hospital"></i><span> Medical </span></a>
                    <ul class="sub-menu">
                      <li><a href="AddHospital.php">Add Hospital</a>
                      </li>
                      <li><a href="HospitalInfo.php">HospitalInfo</a>
                      </li>
                      <li><a href="AddPatient.php">Add Patient</a>
                      </li>
                      <li><a href="ActivePatients.php">Active Patients</a>
                      </li>
					  <li><a href="RecoveredPatients.php">Recovered Patients</a>
                      </li>
					  <li><a href="DeadPatientlist.php">Dead Patients</a>
                      </li>
                    </ul>
                  </li>

<!------------------------------------------------------------------------------------------------------------------------------------->
                
                  <li class="divider">Village/Govermental</li>

<!------------------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Users</span></a>
                    <ul class="sub-menu">
                      <li><a href="users.php">Users</a>
                      </li>
                      <li><a href="Tax.php">Tax</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>
                      
                      <li><a href="userlog.php">User Access Log</a>
                      </li>
                      
                    </ul>
                  </li>


                  <li class="parent"><a href=""><i class="icon mdi mdi-male-female"></i><span>Villagers</span></a>
                    <ul class="sub-menu">
                      <li><a href="Addvillagers.php">Add Villager</a>
                      </li>
                      <li><a href="villagers.php">All Villagers</a>
                      </li>
                     
                    </ul>
                  </li>

				  <li class="parent "><a href="#"><i class="icon mdi mdi-google-maps"></i><span> Village Places </span></a>
                    <ul class="sub-menu">
                    <li><a href="addplacecat.php">Add Place category</a></li>
                    <li><a href="manageplacecat.php">Manage Place category </a></li>

                      <li><a href="place.php">Add Places</a></li>
                      <li><a href="manageplace.php">Manage Places</a></li>
                        
                    </ul>
                  </li>


<li class="parent"><a href=""><i class="icon mdi mdi-file-text"></i><span>Documentation</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>
                     
                    </ul>
                  </li>
				  <li class="parent"><a href=""><i class="icon mdi mdi-format-list-numbered"></i><span>Schemes</span></a>
                    <ul class="sub-menu">
                    <li><a href="addschemes.php">Add Schemes</a>   </li>
                      <li><a href="schemescat.php">Add Scheme Category</a>   </li>
                      <li><a href="schemes.php">View Schemes</a>   </li>
                     
                    </ul>
                  </li>
 
				  <li class="parent"><a href=""><i class="icon mdi mdi-local-post-office"></i><span>POST-BOX</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                      </li>
                     
                    </ul>
                  </li>
				  <li class="parent"><a href=""><i class="icon mdi mdi-local-library"></i><span>JOB Portal</span></a>
                    <ul class="sub-menu">
                      <li><a href="jobdash.php">Job Dashboard</a>
                      </li>
                      <li><a href="Totaljobs.php">Available Jobs</a>
                      </li>
                      <li><a href="jobcatagory.php">Job Category</a>
                      </li>
                    </ul>
                  </li>
<!------------------------------------------------------------------------------------------------------------------------------------->

                   <li class="divider">Extras</li>

<!------------------------------------------------------------------------------------------------------------------------------------->
              		  
                  <li class="parent"><a href=""><i class="icon mdi mdi-odnoklassniki"></i><span>ChatBot</span></a>
                    <ul class="sub-menu">
                      <li><a href="chatbot/admin/index.php">Dashboard</a>
                      </li>
                      <li><a href="chatbot/admin/?page=system_info">ChatBot System info</a>
                      </li>
                      <li><a href="chatbot/admin/?page=responses">ChatBot Responces</a>
                      </li>
                      <li><a href="chatbot/admin/?page=unanswered">Ununsered Responces</a>
                      </li>
                    </ul>
                  </li>
				 
                     
                    </ul>
                  </li>
				 
				  </div>
            </div>
          </div>
		   
      </div>

	  </nav>


<!---------------------------------------------  Main content  ------------------------------------------------------------------------------->


      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark1"></div>
                          <div class="data-info">
         

                               
                          <?php $ov=mysqli_query($con,"select * from villagers");
					  $num=mysqli_num_rows($ov);
					  ?>
                            <div class="desc">Villagers</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $num;?>">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark2"></div>
                          <div class="data-info">
                          <?php $rt=mysqli_query($con,"select * from user");
					  $rw=mysqli_num_rows($rt);?> 
                            <div class="desc">Registered Users</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="<?php echo $rw;?>" data-suffix="">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark3"></div>
                          <div class="data-info">
                          <?php $vt=mysqli_query($con,"select * from ticket");
					  $ovt=mysqli_num_rows($vt);
					  ?>
                            <div class="desc">No. of Compaint Mail</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="<?php echo $ovt;?>">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark4"></div>
                          <div class="data-info">
                          <?php $vt=mysqli_query($con,"select * from patient where PatientStatus='Dead'");
					  $ovt=mysqli_num_rows($vt);
					  ?>
                            <div class="desc">Total Patients</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span class="number" data-toggle="counter" data-end="<?php echo $ovt;?>">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
     

          <div class="col-lg-12" style="min-height:280px;">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> All User Visit </h3>
								
								<script type="text/javascript">
								var visitorsCount = [];
								var myCat =[];
								</script>
								<?php
								$totaldays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); 
								
								$month_array=array();
								for($i=1; $i<=$totaldays; $i++)
								{
									if(!array_key_exists($i,$month_array))
									{
										$key = '';
										if($i<10)
										{
											$key = '0'.$i;
											$month_array[$key] = 0;
										}
										else
										{
											$month_array[$i] = 0;
										}
										?>
										<script type="text/javascript">
										var myKey = "Day " + '<?php echo $i; ?>';
										
										myCat.push(myKey);
										</script>
										<?php
										
									}
									
									
								}
								//print_r($month_array);
								$results = mysqli_query($con,"SELECT logindate FROM usercheck");
					                //$f2=mysql_num_rows($a2);
									
									if(mysqli_num_rows($results) >0)
									{
										while($row = mysqli_fetch_row($results))
										{
											$user_date = $row[0];
											$dateArray = explode('/',$user_date);
											$year = $dateArray[0];
											 $monthName = date("M", mktime(0, 0, 0, $dateArray[1], 10));
											 $currentMonth = date('m',mktime(0, 0, 0, $dateArray[1], 10));
											// echo $monthName; 
											//$month = date("M", strtotime($user_date));
											//echo $month;
											
											
											//echo $month.'<br/>';
											
											//$day = date('d',$dateArray));
											
											if($year == date("Y") && $currentMonth == date("m"))
											{
												
												if(array_key_exists($dateArray[2],$month_array))
												{
													$month_array[$dateArray[2]] = $month_array[$dateArray[2]] + 1;
												}
											}											
										}
									}
									//print_r($month_array);
									foreach($month_array as $key=>$value)
									{
									?>
									<script type="text/javascript">
									visitorsCount.push(<?php echo $value;?>);
									</script>
									<?php									
									}
									?>
									
								
										
							
								<script type="text/javascript">
								var d = new Date();
								var month = new Array();
								month[0] = "January";
								month[1] = "February";
								month[2] = "March";
								month[3] = "April";
								month[4] = "May";
								month[5] = "June";
								month[6] = "July";
								month[7] = "August";
								month[8] = "September";
								month[9] = "October";
								month[10] = "November";
								month[11] = "December";
								var n = month[d.getMonth()];
								$(function () {
								$('#container').highcharts({
									title: {
										text: 'Daily Visitors Chart of ' + n,
										x: -20 //center
									},
									subtitle: {
										text: '',
										x: -20
									},
									xAxis: {
										categories: myCat
									},
									yAxis: {
										min:0,
										title: {
											text: 'Visitors Count'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: ' Users'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'visitorsCount',
										data: visitorsCount
									}]
								});
							});
								</script>
								<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                  <br>
                                </div>
                            </div>
                        </div>
    
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	

        <script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });





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
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

</html>