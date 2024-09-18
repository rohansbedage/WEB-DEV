<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if (isset($_POST['update'])) {
  $adminremark = $_POST['aremark'];
  $fid = $_POST['frm_id'];
  mysqli_query($con, "update ticket set admin_remark='$adminremark',status='closed' where id='$fid'");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-mail inbox</title>
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

<body>
  <div class="be-wrapper be-aside be-fixed-sidebar">
    <nav class="navbar navbar-expand fixed-top be-top-header">

      <div class="page-title"><span> Admin Panel </span></div>

      <div class="page-title"><span>Complaint Mail</span></div>
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
                      <li><a href="users.php">Users</a>
                      </li>
                      <li><a href="Tax.php">Tax</a>
                      </li>
                      <li class="active"><a href="email-inbox.php">Contact Us</a>
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

    <!-------------------------------------------------------------------------------------------------------------------------------------->

    <div class="be-content be-no-padding bg-light">
      <aside class="page-aside">
        <div class="be-scroller-aside">
          <div class="aside-content">
            <div class="content">
              <div class="aside-header">
                <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon mdi mdi-caret-down"></span></button><span class="title">Mail Service</span>
                <p class="description">Complaint Mail Section</p>
              </div>
            </div>
            <div class="aside-nav collapse">
              <ul class="nav">
                <?php $vt = mysqli_query($con, "select * from ticket");
                $ovt = mysqli_num_rows($vt);
                ?>
                <li class="#"><a href="email-inbox.php"><i class="icon mdi mdi-email"></i>Inbox<span class="badge badge-primary float-right"><?php echo $ovt; ?></span></a></li>
                <?php
                $tdate = date("Y/m/d");

                $otv = mysqli_query($con, "select * from ticket where status='Open'");
                $otv1 = mysqli_num_rows($otv);
                ?>
                <li class="#"><a href="pendingmail.php"><i class="icon mdi mdi-email"></i>Pending<span class="badge badge-primary float-right"><?php echo $otv1; ?></span></a></li>
                <?php
                $tdate = date("Y/m/d");

                $otv = mysqli_query($con, "select * from ticket where status='closed'");
                $otv1 = mysqli_num_rows($otv);
                ?>
                <li class="#"><a href="closedmail.php"><i class="icon mdi mdi-email"></i>Closed<span class="badge badge-primary float-right"><?php echo $otv1; ?></span></a></li>

            </div>
          </div>
        </div>
      </aside>

      <!-------------------------------------------------------------------------------------------------------------------------------------->

      <div class="main-content container-fluid">
        <div class="email-inbox-header">
          <div class="row">
            <div class="col-lg-6">
              <div class="email-title"><span class="icon mdi mdi-inbox"></span> Compaint-Box <span class="new-messages">(

                  <?php $tdate = date("Y/m/d");
                  $otv = mysqli_query($con, "select * from ticket ");
                  $otv1 = mysqli_num_rows($otv);
                  ?>
                  <?php echo $otv1; ?> messages)</span> </div>
            </div>

            <div class="col-lg-6">
              <div class="email-search">
                <div class="input-group input-search input-group-sm">
                  <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                    <button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="email-filters">
          <div class="email-filters-left">

            <div class="btn-group">
              <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                With selected <span class="caret"></span></button>
              <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Mark as rea</a><a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
            <div class="btn-group">
              <button class="btn btn-secondary" type="button">Archive</button>
              <button class="btn btn-secondary" type="button">Span</button>
              <button class="btn btn-secondary" type="button">Delete</button>
            </div>
            <div class="btn-group">
              <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
              <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Date</a><a class="dropdown-item" href="#">From</a><a class="dropdown-item" href="#">Subject</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Size</a>
              </div>
            </div>
          </div>
          <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
            <div class="btn-group email-pagination-nav">
              <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-left"></i></button>
              <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-right"></i></button>

            </div>

          </div>
        </div>

        <!--------------------------------------------------------------------------------------------------------------------------------->

        <?php $rt = mysqli_query($con, "select * from ticket order by id desc");
        while ($row = mysqli_fetch_array($rt)) {
        ?>
          <div class="email-list my-1">
            <div class="email-list-item email-list-item--unread">
              <div class="email-list-actions">
                <div class="custom-control custom-checkbox">
                  <span class="badge badge-primary float-left my-1"><?php echo $_SESSION['sid'] = $row['ticket_id']; ?></span>
                </div>
              </div>
              <div class="email-list-detail"><span class="date float-right"><?php echo $row['posting_date']; ?></span> <a href="email.php?id=<?php echo $_SESSION['id'] = $row['id']; ?>"> <span class="from"><?php echo $row['email_id']; ?></span></a>
                <p class="msg"> <?php echo $row['subject']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

        <!--------------------------------------------------------------------------------------------------------------------------------->

      </div>

      <!--------------------------------------------------------------------------------------------------------------------------------->

      <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
      <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
      <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <script src="includes/assets/js/app.js" type="text/javascript"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          //-initialize the javascript
          App.init();
          App.mailInbox();
        });
      </script>
</body>

</html>