<div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>

<div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/images/avatar.png" alt="Avatar"><span class="user-name"></span></a>
                            
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

                                                      
               
</ul>                                          <?php
    
    $sql_get = mysqli_query($con,"SELECT * FROM message WHERE status=0");
    $count = mysqli_num_rows($sql_get);
      ?>
           
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-view-carousel"></span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link " href="home.php" role="button" aria-expanded="false"><span class="icon mdi mdi-home"></span></a></li>
                        
                            
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span>
                       
                        <span class="position-absolute top-0 start-100 translate-middle badge my-1 rounded-pill bg-light"><?php echo $count; ?></span></a>
                        
                        <ul class="dropdown-menu be-notifications ">
                                <li>

                            <div class="title shadow-lg">Notifications<span class="badge badge-pill"><?php echo $count; ?></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications bg-light">
                                            <div class="content">
                                              
                                                <ul>

                                                <ul class="list-group">
  <li >


                                                <?php
            $sql_get1 = mysqli_query($con,"SELECT * FROM message WHERE status=0");
            if(mysqli_num_rows($sql_get1)>0)
            {
              while($result = mysqli_fetch_assoc($sql_get1))
              {
                echo '<a class=" list-group-item  text-uppercase   border border-white shadow my-1  text-center text-primary" href="read_notification.php?id='.$result['id'].'">'.$result['name'].'</a>';
         
              }

            }
            else
            {
              echo '<a class="dropdown-item text-danger list-group-item  text-center text-uppercase bg-light  font-weight-bold" aria-current="true" href="#"><i class="far fa-frown-open"></i>Sorry! No Messages</a>';

            }
            
            ?>
            
          </li>
       
        </ul>

                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="footer"> <a href="#">All notifications</a></div>
                                </li>

 


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
                               <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="medi.php" role="button">Health care</a>
                               
                               <hr>  <a class="btn btn-light  btn-lg btn-block shadow-lg" href="post.php " role="button">POST-BOX</a>
                                <hr>
                                <hr>  <a class="btn btn-light shadow-sm btn-lg btn-block shadow-lg" href="market.php " role="button">Market Prices</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="mail.php " role="button">Complaint Mail</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="placecategory.php" role="button">Village Places</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="schemes.php" role="button">Village schemes</a>
                                <hr> <a class="btn btn-light  shadow-sm btn-lg btn-block shadow-lg" href="aboutvillage.php" role="button">About Village</a>
                        
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