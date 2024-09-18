<?php
session_start();
include("dbconnection.php");
error_reporting(0);

if (isset($_POST['submit'])) {
  $category = $_POST['category'];
  $VillagersLastName = $_POST['VillagersLastName'];
  $VillagersAge = $_POST['VillagersAge'];
  $VillagersGender = $_POST['VillagersGender'];
  $VillagePopulationCategory = $_POST['VillagePopulationCategory'];
  $VillagersLiteracy = $_POST['VillagersLiteracy'];
  $VillagersProfession = $_POST['VillagersProfession'];

  $hospitalStatus = $_POST['Active'];

  $query = mysqli_query($con, "insert into villagers(VillagersFirstName,VillagersLastName,VillagersAge,VillagersGender,VillagePopulationCategory,VillagersLiteracy,VillagersProfession,hospitalStatus) values('$category','$VillagersLastName','$VillagersAge','$VillagersGender','$VillagePopulationCategory','$VillagersLiteracy','$VillagersProfession','Active')");
  if ($query) {
    $msg = "Category created ";
    header("Location: villagers.php");
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
  <title>Add Villagers</title>
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/select2/css/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="includes/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
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
                      <li class="active"><a href="Addvillagers.php">Add Villager</a>
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
        <h2 class="page-head-title">Add New Villager </h2>
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Village</a></li>
            <li class="breadcrumb-item active">Add New Villager</li>
          </ol>
        </nav>
        <br>

        <div class="row ">

          <div class="col-md-12 ">
            <div class="container my-5">

              <div class="col-md-12">
                <div class="card card-border-color card-border-color-primary shadow">
                  <div class="card-header card-header-divider">Add New Villager <span class="card-subtitle">Villager Details</span></div>
                  <div class="card-body">
                    <form action="#" style="border-radius: 0px; " name="category" method="post">

                      <div class="form-group row pt-3">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right pt-4">Select VillagersGender :</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                          <div class="form-check form-check-inline">
                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                              <input class="custom-control-input" id="radioIcon2" type="radio" name="VillagersGender" value="male"><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                            </label>
                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                              <input class="custom-control-input" id="radioIcon1" type="radio" name="VillagersGender" value="female"><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Villagers Name:</label>
                        <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                          <input class="form-control" id="pass2" name="category" type="text" required="" placeholder="VillagersFirstName">
                        </div>
                        <div class="col-sm-4 col-lg-3">
                          <input class="form-control" name="VillagersLastName" type="text" required="" placeholder="VillagersLastName">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Select VillagersAge :</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                          <input class="form-control" id="inputText3" name="VillagersAge" type="number">
                        </div>
                      </div>

                      <div class="form-group row pt-1 pb-1">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Select VillagePopulationCategory :</label>
                        <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="VillagePopulationCategory" value="Infants"><span class="custom-control-label"> &nbsp; Infants &nbsp; (Age Group : Less Than 1 Year)</span>
                          </label>
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="VillagePopulationCategory" value="Children"><span class="custom-control-label">&nbsp; Children &nbsp; (Age Group : Between 1- to -11 Years)</span>
                          </label>
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="VillagePopulationCategory" value="Teenagers"><span class="custom-control-label">&nbsp; Teenagers &nbsp; (Age Group : Between 12 - to -17 Years)</span>
                          </label>
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="VillagePopulationCategory" value="Adults"><span class="custom-control-label">&nbsp;&nbsp; Adults &nbsp; (Age Group : Between 18 - to -64 Years)</span>
                          </label>
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="VillagePopulationCategory" value="Older Adults"><span class="custom-control-label">&nbsp; Older Adults &nbsp; (Age Group : More Than 65 Years)</span>
                          </label>
                        </div>
                      </div>

                      <div class="form-group row pt-1 pb-1">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">VillagersLiteracy :</label>
                        <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="VillagersLiteracy" value="Literate"><span class="custom-control-label">Literate</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="VillagersLiteracy" value="Illiterate"><span class="custom-control-label">Illiterate</span>
                          </label>
                        </div>
                      </div>

                      <div class="form-group row pt-1">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">VillagersProfession</label>
                        <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Farmer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Farmer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Teacher" name="VillagersProfession"><span class="custom-control-label custom-control-color">Teacher</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Doctor" name="VillagersProfession"><span class="custom-control-label custom-control-color">Doctor</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Engineer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Engineer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Lawyer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Lawyer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Journalist" name="VillagersProfession"><span class="custom-control-label custom-control-color">Journalist</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Nurse" name="VillagersProfession"><span class="custom-control-label custom-control-color">Nurse</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Professor" name="VillagersProfession"><span class="custom-control-label custom-control-color">Professor</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Property Manager" name="VillagersProfession"><span class="custom-control-label custom-control-color">Property Manager</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Reporter" name="VillagersProfession"><span class="custom-control-label custom-control-color">Reporter</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Scientist" name="VillagersProfession"><span class="custom-control-label custom-control-color">Scientist</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Social Worker" name="VillagersProfession"><span class="custom-control-label custom-control-color">Social Worker</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Writer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Writer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Technician" name="VillagersProfession"><span class="custom-control-label custom-control-color">Technician</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Plumber" name="VillagersProfession"><span class="custom-control-label custom-control-color">Plumber</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Electrician" name="VillagersProfession"><span class="custom-control-label custom-control-color">Electrician</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Laborer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Laborer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Cleaner" name="VillagersProfession"><span class="custom-control-label custom-control-color">Cleaner</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Chemist" name="VillagersProfession"><span class="custom-control-label custom-control-color">Chemist</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Fashion Designer" name="VillagersProfession"><span class="custom-control-label custom-control-color">Fashion Designer</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Firefighter" name="VillagersProfession"><span class="custom-control-label custom-control-color">Firefighter</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Student" name="VillagersProfession"><span class="custom-control-label custom-control-color">Student</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Underage" name="VillagersProfession"><span class="custom-control-label custom-control-color">Underage</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Unemployed" name="VillagersProfession"><span class="custom-control-label custom-control-color">Unemployed</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" value="Other" name="VillagersProfession"><span class="custom-control-label custom-control-color">Other</span>
                          </label>
                        </div>
                      </div>

                  </div>

                  <div class="row pt-3">
                    <div class="col-lg-6 pb-4 pb-lg-0">

                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">

                        <button class="btn btn-space btn-primary" type="submit" href="Editvillagersinfo.php?cid=<?php echo htmlentities($row['id']); ?>" name="submit">Submit</button>
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