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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Paaword</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
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
    <div class="be-wrapper">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header">
                    <a class="navbar-brand" href="index-2.html"></a>
                </div>
                <div class="page-title"><span>Form Elements</span></div>
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/profile/1.png" alt="Avatar"><span class="user-name"></span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name"></div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="adminprofile.php"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a>
                                <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                            <ul class="dropdown-menu be-notifications">
                                <li>
                                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications">
                                            <div class="content">
                                                <ul>
                                                    <li class="notification notification-unread">
                                                        <a href="#">
                                                            <div class="image"><img src="includes/assets/img/avatar2.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="includes/profile/2.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="includes/assets/img/avatar4.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="includes/assets/img/avatar5.png" alt="Avatar"></div>
                                                            <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                            <ul class="dropdown-menu be-connections">
                                <li>
                                    <div class="list">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/github.png" alt="Github"><span>GitHub</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/slack.png" alt="Slack"><span>Slack</span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="includes/assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li class="active"><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>User</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="./users.php">Users</a>
                                        </li>
                                        <li><a href="email-inbox.php">Contact Us</a>
                                        </li>

                                        <li><a href="userlog.php">User Access Log</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Medical </span></a>
                                    <ul class="sub-menu">
                                        <li><a href="AddHospital.php">Add Hospital</a>
                                        </li>
                                        <li><a href="HospitalInfo.php">HospitalInfo</a>
                                        </li>
                                        <li><a href="AddPatient.php">Add Patient</a>
                                        </li>
                                        <li><a href="ActivePatients.php">Active Patients</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Village Places </span></a>
                                    <ul class="sub-menu">
                                        <li><a href="./addplacecat.php">Add Place category</a></li>
                                        <li><a href="./manageplacecat.php">Manage Place category </a></li>

                                        <li><a href="./place.php">Add Places</a></li>
                                        <li><a href="./manageplace.php">Manage Places</a></li>

                                    </ul>
                                </li>

                                <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Villagers</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="Addvillagers.php">Add Villager</a>
                                        </li>
                                        <li><a href="villagers.php">All Villagers</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>ChatBot</span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="chatbot/system_info.php">ChatBot System info</a>
                                        </li>
                                        <li><a href="chatbot/admin_questions.php">ChatBot Responces</a>
                                        </li>
                                        <li><a href="chatbot/user_questions.php">Ununsered Responces</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Documentation</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="uploaddocs.php">Uplod Docs</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>POST-BOX</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                                        </li>

                                    </ul>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="be-content">
            <div class="page-head">
                <h2 class="page-head-title">Form Elements</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Elements</li>
                    </ol>
                </nav>
            </div>
            <!---------------------------------------------------------------------------------------------------------------------------->

            <div class="main-content container-fluid">

                <!---------------------------------------------------------------------------------------------------------------------------->

                <!--------------------------------------------------------------PASSWORD-------------------------------------------------------------->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-border-color card-border-color-primary">
                            <div class="card-header card-header-divider">Basic Elements<span class="card-subtitle">These are the basic bootstrap form elements</span></div>
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
            <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="includes/assets/js/app.js" type="text/javascript"></script>
            <script src="includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
            <script src="includes/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    //-initialize the javascript
                    App.init();
                    App.formElements();
                });
            </script>
</body>

</html>