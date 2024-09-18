<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "rohan");
$code = "SELECT * FROM appliedjobs WHERE id='$id'";
$res = mysqli_query($db, $code);

if (isset($_GET['type']) && $_GET['type'] != '') {
  $type = $_GET['type'];
  if ($type == 'status') {
    $operation = $_GET['operation'];
    $id = $_GET['id'];
    if ($operation == 'active') {
      $status = '1';
    } else {
      $status = '0';
    }

    $update_status_sql = "update appliedjobs set status='$status' where id='$id'";
    mysqli_query($db, $update_status_sql);
    $update_status_sql = "update appliedjobs set status='$status' where id='$id'";
    mysqli_query($db, $update_status_sql);
  }

  if ($type == 'delete') {
    $operation = $_GET['ope'];
    $id = $_GET['id'];
    if ($operation == 'active') {
      $status = '3';
    } else {
      $status = '0';
    }

    $delete_sql = "update appliedjobs set status='3' where id='$id'";
    mysqli_query($db, $delete_sql);
  }
}

if ($type == 'temp') {
  $saurabh = $_GET['saurabh'];
  $id = $_GET['id'];
  if ($saurabh == 'deactive') {
    $sta = '1';
  } else {
    $sta = '0';
  }

  $update_status_sql = "update appliedjobs set temp='$sta' where id='$id'";
  mysqli_query($db, $update_status_sql);
}

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Viewcv</title>
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
                      <li class="active"><a href="jobdash.php">Job Dashboard</a>
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
      <div class="page-head">
        <h2 class="page-head-title">View CV</h2>
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Village places</a></li>
            <li class="breadcrumb-item active">View C.V.</li>
          </ol>
        </nav>
      </div>
      <div class="main-content container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Application<span class="card-subtitle"></span></div>
              <div class="card-body">
                <form enctype="multipart/form-data">
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) { ?>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" type="text" name="name" required="" placeholder="<?php echo $row['name'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" type="text" required="" data-parsley-minlength="6" name="details" placeholder="<?php echo $row['email'] ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" type="text" required="" data-parsley-length="[5,10]" name="details" placeholder="<?php echo $row['address'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Education</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" type="text" required="" data-parsley-min="6" name="details" placeholder="<?php echo $row['edu'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Mobile Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" type="text" required="" data-parsley-max="6" name="details" placeholder="<?php echo $row['mobile'] ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Job Category</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" required="" type="text" min="6" max="100" name="details" placeholder="<?php echo $row['job'] ?>">
                      </div>
                    </div>

                    <div class="form-group row text-right">
                      <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <a class="btn btn-space btn-secondary " href="uploads/<?php echo $row['img'] ?>" target="_blank">View Resume</a>

                        <?php if ($row['status'] == 1) {
                          echo "<span><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>ACCEPTED</a></span>&nbsp;&nbsp;&nbsp;";
                        } else {
                          echo "<span><a href='?type=status&operation=active&id=" . $row['id'] . "'>ACCEPT</a></span>&nbsp;&nbsp;&nbsp;";
                        }

                        if ($row['status'] == 3) {
                          echo "<span><a href='?type=delete&ope=deactive&id=" . $row['id'] . "'>Rejected</a></span>";
                        } else {
                          echo "<span><a href='?type=delete&ope=active&id=" . $row['id'] . "'>REJECT</a></span>&nbsp;&nbsp;&nbsp;";
                        }

                        ?>
                        <div>

                        </div>
                      <?php  }  ?>

                      </div>
                    </div>

                </form>
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
  <script src="includes/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
      $('form').parsley();
    });
  </script>
</body>

</html>