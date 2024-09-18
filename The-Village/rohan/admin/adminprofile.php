<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
if (isset($_POST['change'])) {
  $oldpas = $_POST['oldpass'];
  $adminid = $_SESSION['id'];
  $newpassword = $_POST['newpass'];
  $sql = mysqli_query($con, "SELECT password FROM  admin where password='$oldpas' && id='$adminid'");
  $num = mysqli_fetch_array($sql);
  if ($num > 0) {
    $con = mysqli_query($con, "update  admin set password='$newpassword' where id='$adminid'");
    $_SESSION['msg1'] = "Password Changed Successfully !!";
    //header('location:user.php');
  } else {
    $_SESSION['msg1'] = "Old Password not match !!";
  }
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Profile</title>
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
  <script language="javascript" type="text/javascript">
    function valid() {
      if (document.form1.oldpass.value == "") {
        alert(" Old Password Field Empty !!");
        document.form1.oldpass.focus();
        return false;
      } else if (document.form1.newpass.value == "") {
        alert(" New Password Field Empty !!");
        document.form1.newpass.focus();
        return false;
      } else if (document.form1.confirmpassword.value == "") {
        alert(" Re-Type Password Field Empty !!");
        document.form1.confirmpassword.focus();
        return false;
      } else if (document.form1.newpass.value.length < 6) {
        alert(" Password Field length must be atleast of 6 characters !!");
        document.form1.newpass.focus();
        return false;
      } else if (document.form1.confirmpassword.value.length < 6) {
        alert(" Re-Type Password Field less than 6 characters !!");
        document.form1.confirmpassword.focus();
        return false;
      } else if (document.form1.newpass.value != document.form1.confirmpassword.value) {
        alert("Password and Re-Type Password Field do not match  !!");
        document.form1.newpass.focus();
        return false;
      }

      return true;
    }
  </script>
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

                  <li class="active"><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>

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

        <div class="jumbotron jumbotron-fluid bg-light shadow border border-primary">
          <div class="container">
            <h1 class="display-4">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              Admin Profile</h1>
            <p class="lead ">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              Admin password Changing section</p>
          </div>
        </div>

        <!--------------------------------------------------------------PASSWORD-------------------------------------------------------------->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Change Your Password <span class="card-subtitle"></span></div>
              <p align="center" style="color:#FF0000"><?php echo $_SESSION['msg1']; ?><?php echo $_SESSION['msg1'] = ""; ?></p>

              <div class="card-body">
                <form name="form1" method="post" action="" onSubmit="return valid();">
                  <div class="form-group row">

                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Current Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="oldpass" id="oldpass" value="" class="form-control" />

                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">New Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="newpass" id="newpass" value="" class="form-control" />

                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPlaceholder3">Confirm Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                      <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" />

                    </div>
                  </div>

                  <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                      <button class="btn btn-space btn-primary" type="submit" value="Change" name="change">Submit</button>
                      <a href="changepass.php" class="btn btn-space btn-secondary" role="button" data-bs-toggle="button">Clear</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-------------------------------------------------------------------------------------------------------------------->

      </div>
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
  <script src="includes/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
  <script src="includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
      App.pageProfile();
    });
  </script>
</body>

</html>