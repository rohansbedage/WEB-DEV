<?php
session_start();
include("dbconnection.php");
error_reporting(0);

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $AvailableNormalBeds = $_POST['AvailableNormalBeds'];
    $TotalNormalBeds = $_POST['TotalNormalBeds'];
    $AvailableVentilatorBeds = $_POST['AvailableVentilatorBeds'];
    $TotalVentilatorBeds = $_POST['TotalVentilatorBeds'];

    $hospitalStatus = $_POST['Active'];

    $query = mysqli_query($con, "insert into hospital(HospitalName,AvailableNormalBeds,TotalNormalBeds,AvailableVentilatorBeds,TotalVentilatorBeds,hospitalStatus) values('$category','$AvailableNormalBeds','$TotalNormalBeds','$AvailableVentilatorBeds','$TotalVentilatorBeds','Active')");
    if ($query) {
        $msg = "Category created ";
        header("Location: HospitalInfo.php");
    } else {
        $error = "Something went wrong . Please try again.";
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
    <title>Add hospital</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

<body class="bg-light">
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
                                            <li class="active"><a href="AddHospital.php">Add Hospital</a>
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
            <div class="page-head">
                <h2 class="page-head-title"> Add hospital information</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Important</a></li>
                        <li class="breadcrumb-item active">Add hospital</li>
                    </ol>
                </nav>
                <br>

                <div class="row ">

                    <div class="col-md-12 ">
                        <div class="container my-5">

                            <div class="col-md-12 ">
                                <div class="card card-border-color card-border-color-primary shadow">
                                    <div class="card-header card-header-divider">Add hospital Entries <span class="card-subtitle">hospital Details</span></div>
                                    <div class="card-body ">
                                        <form action="#" style="border-radius: 0px; " name="category" method="post">

                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Hospital Name :</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" id="inputText3" name="category" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Available NormalBeds :</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" id="inputText3" name="AvailableNormalBeds" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Select TotalNormalBeds :</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" id="inputText3" name="TotalNormalBeds" type="number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">AvailableVentilatorBeds :</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" id="inputText3" name="AvailableVentilatorBeds" type="number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">TotalVentilatorBeds :</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" id="inputText3" name="TotalVentilatorBeds" type="number">
                                                </div>
                                            </div>

                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-lg-6 pb-4 pb-lg-0">

                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-right">

                                                <button class="btn btn-space btn-primary" type="submit" href="Edithospitalinfo.php?cid=<?php echo htmlentities($row['id']); ?>" name="submit">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </p>
                                        </div>
                                    </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------------------------------------------------------------------------------------->

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
                        App.init();
                        App.formElements();
                    });
                </script>
</body>

</html>