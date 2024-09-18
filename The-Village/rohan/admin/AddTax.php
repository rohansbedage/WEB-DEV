<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $watertax = $_POST['watertax'];
    $Propertytax = $_POST['Propertytax'];
    $Penalty = $_POST['Penalty'];
    $Paymentstatus = $_POST['Paymentstatus'];
    $address = $_POST['address'];
    $userid = $_GET['id'];
    $ret = mysqli_query($con, "update user set firstname='$firstname',lastname='$lastname',watertax='$watertax',Propertytax='$Propertytax',Penalty='$Penalty',Paymentstatus='$Paymentstatus',address='$address' where id='$userid'");
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

    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
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
                                            <li><a href="users.php">Users</a>
                                            </li>
                                            <li class="active"><a href="Tax.php">Tax</a>
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

        <div class="card-body">

            <div class="be-content">
                <div class="page-head">
                    <h2 class="page-head-title">Add Penalty</h2>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb page-head-nav">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active">Add Penalty<< /li>
                        </ol>
                    </nav>
                </div>

                <div class="main-content container-fluid">
                    <div class="row wizard-row">
                        <div class="col-md-12 fuelux">
                            <div class="block-wizard">
                                <div class="wizard wizard-ux" id="wizard1">

                                    <div class="step-content">
                                        <div class="step-pane active" data-step="1">
                                            <div class="container p-0">

                                                <?php $rt = mysqli_query($con, "select * from user where id='" . $_GET['id'] . "'");
                                                while ($rw = mysqli_fetch_array($rt)) { ?>

                                                    <form class="form-horizontal group-border-dashed" method="post" enctype="multipart/form-data">

                                                        <div class="form-group row">
                                                            <div class="col-sm-7">
                                                                <h3 class="wizard-title">User Info</h3>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">firstname</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="firstname" id="lastname" type="text" value="<?php echo $rw['firstname']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">lastname</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="lastname" id="lastname" type="text" value="<?php echo $rw['lastname']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">watertax</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="watertax" id="watertax" type="text" value="<?php echo $rw['watertax']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Propertytax</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="Propertytax" id="Propertytax" type="text" value="<?php echo $rw['Propertytax']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Penalty</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="Penalty" id="Penalty" type="text" value="<?php echo $rw['Penalty']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Paymentstatus</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="Paymentstatus" id="Paymentstatus" type="text" value="<?php echo $rw['Paymentstatus']; ?>">

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Contact no.</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="contact" id="contact" type="text" value="<?php echo $rw['mobile']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Address</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input class="form-control" name="address" type="text" value="<?php echo $rw['address']; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button class="btn btn-secondary btn-space">Cancel</button>
                                                                <button type="submit" name="update" class="btn btn-primary btn-space md-trigger" data-modal="nft-default">Save changes</button></td>

                                                                <!------------------------------------------------------------------------------------------------------------------------------------->

                                                                <!------------------------------------------------------------------------------------------------------------------------------------->

                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    </form>
                                            </div>
                                        </div>

                                        <br />

                                        <!------------------------------------------------------------------------------------------------------------------------------------->

                                    </div>
                                    <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                                    <script src="includes/assets/js/app.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
                                    <script src="includes/assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            //-initialize the javascript
                                            App.init();
                                            App.wizard();
                                        });
                                    </script>

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