
<head>
<?php
$con=mysqli_connect("localhost", "root", "", "rohan");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
function check_login()
{
if(strlen($_SESSION['login'])==0)
	{	
		$host=$_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="login.php";		
		$_SESSION["login"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
<?php


?>

    
    <link rel="stylesheet" href="dist/css/adminlte.css">


    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>

<div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                            
                            <?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?> 
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name"><?php echo $row['name'];?></div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="uside.php"><span class="icon mdi mdi-face"></span>Account</a>
                                <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                            <?php } ?>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
<li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>

                                                      
                    </ul>
                </div>


                </div>
        </nav>


                
<!----------------------------------------------------------------------------------------------------------------------------------->





<nav class="be-right-sidebar ">
            <div class="sb-content">
                <div class="tab-navigation ">
                
                </div>
                <div class="tab-panel ">
                    <div class="tab-content"> 
                        <div class="tab-pane tab-chat active" >
                            <div class="chat-contacts">
                                <div class="chat-sections">
                                    <div class="be-scroller-chat bg-white">
                                        <div class="content ">
                                        <div class="jumbotron jumbotron-fluid bg-white sticky-top shadow-lg">
 
    <h1 class="display-4 text-center "> Services</h1>

</div>
<div class="container"> 

                                            <a class="btn btn-light shadow-sm btn-lg btn-block shadow-lg" href="job.php" role="button">Job Portal</a>
                               <hr>
                                <a class="btn btn-light  btn-lg btn-block shadow-lg" href="post.php " role="button">POST-BOX</a>
                                <hr>
                                <a class="btn btn-primary  shadow-sm btn-lg btn-block shadow-lg" href="tax.php " role="button">PAY TAX</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="mail.php " role="button">Complaint Mail</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="placecategory.php" role="button">Village Places</a>
                        
                                </div>
                                     <div class="">
                                                <div class="user">
                                                    <a href="post.php">
                                                        <div class="user-data"><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                            </div>
                            
                        </div>
                     
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>
<div class="container">
      <div class="alert alert-primary alert-dismissible" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                    <div class="icon"><span class="mdi mdi-notifications"></span></div>
                   <div class="message"> <h4>Attention!</h4>  <h5> This is the Village ChatbBot System , Here You can ask Village related Queries Only. </h5></div>
                  </div></div>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
  

  </head>