<?php
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
$da = date("Y-m-d");
if (isset($_POST['save'])) { // if save button on the form is clicked
  // name of the uploaded file

  $name = $_POST['name'];
  $detail = $_POST['detail'];
  $da = $_POST['date'];

  // destination of the file on the server
  $conn = mysqli_connect('localhost', 'root', '', 'rohan');

  $sql = "INSERT INTO breakingnews (Name, des,Post_Date) VALUES ('$name', '$detail','$da')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data Incerted Succesfully ');</script>";
    echo "<script>window.location.href='breaking.php'</script>";
  } else {
    echo "Failed to upload file.";
  }
}

?>

<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Breaking News</title>
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
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
                        <li class="active"><a href="breaking.php">Breaking News</a>
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

        <div class="main-content container-fluid">
          <div class="card text-center">
            <div class="card-header card-header-divider">Breaking News</div>
            <div class="card-body">
              <form action="breaking.php" method="post">

                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right text-light">Equal To</label>

                  <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                    <input class="form-control" type="text" name="name" required="" placeholder="Name">
                  </div>

                  <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                    <input class="form-control" type="text" name="detail" required="" placeholder="Details">
                  </div>

                </div>

                <div class="form-group row">

                  <label class="col-12 col-sm-3 col-form-label text-sm-right text-light">Equal To</label>
                  <div class="col-sm-4 col-lg-3">
                    <input class="form-control" type="date" name="date" value="" placeholder="details" id="pass2" required="">
                  </div>
                  <div class="col-sm-4 col-lg-3 my-1">

                    <button type="submit" name="save" class="btn btn-primary btn-lg btn-block">Add Breaking News</button>

                  </div>

              </form>
            </div>
          </div>
        </div>

        <div class="row">
          
          <div class="col-sm-12">
            <div class="card card-table">
              <div class="card-header">Available jobs
                <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                  <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>


              
              <?php

              $db = mysqli_connect("localhost", "root", "", "rohan");
              $qry = "SELECT * FROM breakingnews";
              $res = mysqli_query($db, $qry);

              $type = $_GET['type'];

              if ($type == 'temp') {
                $saurabh = $_GET['saurabh'];
                $id = $_GET['id'];
                if ($saurabh == 'deactive') {
                  $update_status_sql = "DELETE FROM breakingnews where Id='$id'";
                  mysqli_query($db, $update_status_sql);
                } else {
                }
              }

              ?>
              
              <div class="card-body">
                <table class="table table-striped table-hover table-fw-widget" id="table3">
                  <thead>
                    <tr>
                      <th> Sr.no</th>

                      <th>Name</th>
                      <th>Details</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $i = 1;
                    while (($row = mysqli_fetch_assoc($res))) {
                    ?>
                      <tr class="odd gradeX">
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['des']; ?></td>
                        <td><?php echo "<span><a href='?type=temp&saurabh=deactive&id=" . $row['Id'] . "'>delete</a></span>"; ?> </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
        
        <!---------------------------------------------------------------------------------------------------------------------------->

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