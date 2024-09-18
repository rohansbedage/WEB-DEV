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

  <title>Users</title>
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />

  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />

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
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/profile/1.png" alt="Avatar"><span class="user-name"></span></a>
            <div class="dropdown-menu" role="menu">
              <div class="user-info">
                <div class="user-name">The Village Admin</div>
                <div class="user-position online">Available</div>
              </div><a class="dropdown-item" href="adminprofile.php"><span class="icon mdi mdi-face"></span>Account</a>
              <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
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
                  <!--------Dashboard----------------------------------------------------------------------------------------------------------------------------->

                  <li class=""><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>

                  <li class="divider">Important</li>

                  <!--------Notification----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href="#"><i class="icon mdi mdi-notifications-active"></i><span>Notification</span></a>
                    <ul class="sub-menu">
                      <li><a href="sendnotification.php">Send Notification</a>
                      </li>
                      <li><a href="viewallnotification.php">Manage notifications</a>
                      </li>

                    </ul>
                  </li>
                  <!--------Breaking----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent "><a href="#"><i class="icon mdi mdi-alert-triangle"></i><span>
                        Breaking </span></a>
                    <ul class="sub-menu">
                      <li><a href="breaking.php">Breaking News</a>
                      </li>
                      <li><a href="importantnotice.php">Important Notices</a>
                      </li>

                    </ul>
                  </li>
                  <!--------Medical----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent "><a href="#"><i class="icon mdi mdi-hospital"></i><span> Medical
                      </span></a>
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
                  <!--------Users----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Users</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="users.php">Users</a>
                      </li>
                      <li><a href="Tax.php">Tax</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>

                      <li><a href="userlog.php">User Access Log</a>
                      </li>

                    </ul>
                  </li>

                  <!--------Villagers----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-male-female"></i><span>Villagers</span></a>
                    <ul class="sub-menu">
                      <li><a href="Addvillagers.php">Add Villager</a>
                      </li>
                      <li><a href="villagers.php">All Villagers</a>
                      </li>

                    </ul>
                  </li>

                  <!--------Village Places----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent "><a href="#"><i class="icon mdi mdi-google-maps"></i><span>
                        Village Places </span></a>
                    <ul class="sub-menu">
                      <li><a href="addplacecat.php">Add Place category</a></li>
                      <li><a href="manageplacecat.php">Manage Place category </a></li>

                      <li><a href="place.php">Add Places</a></li>
                      <li><a href="manageplace.php">Manage Places</a></li>

                    </ul>
                  </li>
                  <!--------Documentation----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-file-text"></i><span>Documentation</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>

                    </ul>
                  </li>
                  <!--------Schemes----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-format-list-numbered"></i><span>Schemes</span></a>
                    <ul class="sub-menu">
                      <li><a href="addschemes.php">Add Schemes</a> </li>
                      <li><a href="schemescat.php">Add Scheme Category</a> </li>
                      <li><a href="schemes.php">View Schemes</a> </li>

                    </ul>
                  </li>
                  <!--------POST-BOX----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-local-post-office"></i><span>POST-BOX</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                      </li>

                    </ul>
                  </li>
                  <!--------JOB Portal----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-local-library"></i><span>JOB
                        Portal</span></a>
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
                  <!--------ChatBot----------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href=""><i class="icon mdi mdi-odnoklassniki"></i><span>ChatBot</span></a>
                    <ul class="sub-menu">
                    
                      <li><a href="chatbot/system_info.php">ChatBot System info</a>
                      </li>
                      <li><a href="chatbot/admin_questions.php">ChatBot Responces</a>
                      </li>
                      <li><a href="chatbot/user_questions.php">Ununsered Responces</a>
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

      <!---------------------------------------------------------------------------------------------------------------------------->
      <?php

      include_once("db_connect.php");
      if (!empty($_GET['import_status'])) {
        switch ($_GET['import_status']) {
          case 'success':
            $message_stauts_class = 'alert-success';
            $import_status_message = 'Employee data inserted successfully.';
            break;
          case 'error':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Error: Please try again.';
            break;
          case 'invalid_file':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Error: Please upload a valid CSV file.';
            break;
          default:
            $message_stauts_class = '';
            $import_status_message = '';
        }
      }

      ?>

      <div class="main-content container-fluid">
        <div class="card text-center">
          <div class="card-header card-header-divider">Upload Users To Database<span class="card-subtitle">Choose Users Excel to upload to database</span></div>
          <div class="card-body">
            <form action="userimport1.php" method="post" enctype="multipart/form-data" id="import_form">
              <div class="form-group row">
                <label class="col-12 col-sm-3 col-form-label text-sm-right text-light">Equal To</label>
                <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                  <input class="form-control" type="file" name="file" id="pass2" type="password" required="" placeholder="Password">
                </div>
                <div class="col-sm-4 col-lg-3">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" name="import_data" value="IMPORT">

                </div>
            </form>
          </div>

        </div>
      </div>

      <!---------------------------------------------------------------------------------------------------------------------------->
      <div class="row">
        <div class="col-sm-12">
          <div class="card card-table">
            <div class="card-header">User Table
              <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover table-fw-widget" id="table3">
                <thead>
                  <tr>
                    <th>Sr.no</th>
                    <th>User Name</th>
                    <th>Firstname Name</th>
                    <th>Lastname Name</th>
                    <th>E-mail</th>
                    <th>Contact No</th>
                    <th>Age</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $ret = mysqli_query($con, "select * from user");
                  $cnt = 1;
                  while ($row = mysqli_fetch_array($ret)) {
                    $_SESSION['ids'] = $row['id'];
                  ?>
                    <tr class="odd gradeX">
                      <td><?php echo $cnt; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['firstname']; ?></td>
                      <td><?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['Age']; ?></td>
                      <td>
                        <form name="abc" action="" method="post">

                          <!------------------------------------------------------------------------------------------------------------------------------------->

                          <a href="userdetails.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-space btn-primary ">View n Edit</a>

                        </form>
                      </td>
                    </tr>
                  <?php $cnt = $cnt + 1;
                  } ?>
                </tbody>

              </table>
            </div>

            <!------------------------------------------------------------------------------------------------------------------------------------->

            <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="includes/assets/js/app.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
            <script type="text/javascript">
              $(document).ready(function() {
                //-initialize the javascript
                App.init();
                App.dataTables();
              });
            </script>

            <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="includes/assets/js/app.js" type="text/javascript"></script>
            <script src="includes/assets/lib/jquery.niftymodals/js/jquery.niftymodals.js" type="text/javascript"></script>

            <script type="text/javascript">
              $.fn.niftyModal('setDefaults', {
                overlaySelector: '.modal-overlay',
                contentSelector: '.modal-content',
                closeSelector: '.modal-close',
                classAddAfterOpen: 'modal-show'
              });

              $(document).ready(function() {
                //-initialize the javascript
                App.init();
              });
            </script>

</body>

</html>