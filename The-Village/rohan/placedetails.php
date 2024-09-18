<?php
    session_start();
    include('includes/config.php');
    //Genrating CSRF Token
    if (empty($_SESSION['token'])) {
    $_SESSION['token']= bin2hex(random_bytes(32));
    }

    if(isset($_POST['submit']))
    {
    //Verifying CSRF Token
    if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $postid=intval($_GET['placeid']);
    $st1='0';
    $query=mysqli_query($con," insert into
    tblcomments(postId,name,email,comment,status)
    values('$postid','$name','$email','$comment','$st1')" );
    if($query):
    echo"<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
unset($_SESSION['token']);
else :
echo "<script>alert('Something went wrong. Please try again.');</script>";
endif;

}
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
    <link rel="shortcut icon" href="">
    <title>Places</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
   
   
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.magnific-popup/magnific-popup.css" />
      

<style>
/* ===================================== */
section.content {
    margin: 10px 5px 0 280px;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}

/* ===================================== */



.card {
    background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
}
/* ===================================== */

.sidebar {
    
    width: 300px;
    
    
    position: fixed;
    top: 61px;
    left: 0;
    -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 11 !important;
}

/* ===================================== */

.sidebar .menu {
    position: relative;
    overflow-y: auto;
    height: 90vh;
}

.sidebar .menu .list {
    list-style: none;
    padding-left: 0;
}

/* ===================================== */


</style>


</head>

<body class="bg-white">
<?php include 'navslider.php';?> 
      
 <aside id="leftsidebar" class="sidebar">       
      
            
        <div class="card fixed-top">
  <div class="card-body text-dark">
  <h1 class="display-5">Village Places</h1>
  </div>
            </div>  
           
           
              <div class="menu">
 


        <ul class="list text-dark text-center">
            <div class="container">      

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php $query=mysqli_query($con,"select id,CategoryName,Description,PostImage from placecat");
while($row=mysqli_fetch_array($query))
{
?>






    
  <a href="placecategory.php?catid=<?php echo htmlentities($row['id'])?>" class="list-group-item bg-white shadow-lg mx-2 list-group-item-action my-1"><?php echo htmlentities($row['CategoryName']);?></a>

  <?php } ?>  
  </div>   


                </ul>
            </div>
      
        </aside>
    

    <section class="content bg-white">
   
<div class="row mx-5 pb-5 mb-4 text-dark ">

<?php $pid=intval($_GET['placeid']); 
 $query=mysqli_query($con," select place.PostTitle as posttitle,place.PostImage,place.PostImage1,place.PostImage2,placecat.CategoryName
 as category,placecat.id as cid,place.PostDetails as postdetails,place.PostingDate as postingdate,place.PostUrl as url from place left join
  placecat on placecat.id=place.CategoryId where place.id='$pid'" );
     while ($row=mysqli_fetch_array($query)) {
      ?>



               
                    <div class="container-fluid mx-5">
                        <!------------------------------------------------------------------------------------------------------------------------------------>
                       


                            <div class="container
                                                font-weight-normal shadow-lg p-3
                                                bg-white rounded text-dark
                                                text-center ">

                                <div>
                                    <h1 class="display-4
                                                        font-weight-normal p-3
                                                        mb-4 bg-transparent
                                                        rounded text-dark
                                                        text-center"></h1>
                                </div>


                                <br><br>
                                <img class="mx-auto d-block" src="admin/postimages/<?php
                                                    echo
                                                    htmlentities($row['PostImage']);?>" alt="<?php echo
                                                    htmlentities($row['posttitle']);?>" width="1000" height="400">
                                <br>


                                <div>
                                    <h1 class="display-5
                                                            font-weight-normal
                                                            shadow-SM p-3 mb-4
                                                            bg-transparent
                                                            rounded text-dark
                                                            text-center"><?php echo  htmlentities($row['posttitle']);?>  </h1>
                                </div>

                                <p class="text">
                                    <h4>
                                        <?php
                                                                $pt=$row['postdetails'];
                                                                echo
                                                                (substr($pt,0));?>
                                    </h4>
                                </p>
                                <hr>

                                </div>              

 
        <div class="jumbotron jumbotron-fluid bg-white my-5 shadow-lg">
        
                                <div class="row g-4 my-4  mx-5">
                                &nbsp;     
                                    <div class="col-auto mx-2">



                                        <div class="controls ">
                                            <br>
                                            <div class="img
                                                                        Max-height=200"><img src="admin/postimages/<?php
                                                                            echo
                                                                            htmlentities($row['PostImage']);?>" alt="Gallery
                                                                        Image" width="300" height="170" class="">
                                                <br><br>
                                                <div class="func">
                                                
                                                &nbsp; &nbsp;                 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn
                                                                                btn-white
                                                                                shadow">
                                                                                &nbsp; &nbsp;&nbsp;&nbsp;
                                                                                <a
                                                                                    class="image-zoom"
                                                                                    href="admin/postimages/<?php
                                                                                    echo
                                                                                    htmlentities($row['PostImage']);?>">
                                                                                    Image
                                                                                    1</a>
                                                                                    &nbsp; &nbsp;&nbsp;&nbsp;
                                                                                    </button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mx-2">


                                        <div class="controls">
                                            <br>
                                            <div class="img"><img src="admin/postimages/<?php
                                                                            echo
                                                                            htmlentities($row['PostImage1']);?>" alt="Gallery
                                                                        Image" width="300" height="170" class="">
                                                <br><br>
                                                <div class="func">
                                                
                                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;     &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                
                                                <button type="button" class="btn
                                                                                btn-white
                                                                                shadow">

                                                                                &nbsp; &nbsp;&nbsp;&nbsp;

                                                                                <a
                                                                                    class="image-zoom"
                                                                                    href="admin/postimages/<?php
                                                                                    echo
                                                                                    htmlentities($row['PostImage1']);?>">
                                                                                    Image
                                                                                    2</a>
                                                                                    
                                                                                    &nbsp; &nbsp;&nbsp;&nbsp;
                                                                                    </button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto mx-2">


                                        <div class="controls">
                                            <br>
                                            <div class="img
                                                                        Max-height=200"><img src="admin/postimages/<?php
                                                                            echo
                                                                            htmlentities($row['PostImage2']);?>" alt="Gallery
                                                                        Image" width="300" height="170" class="">
                                                <br><br>
                 <div class="func">
                 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;       &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                 <button type="button" class="btn btn-white shadow">
                 &nbsp; &nbsp;&nbsp;&nbsp;
         <a class="image-zoom" href="admin/postimages/<?php echo htmlentities($row['PostImage2']);?>"> Image 3</a>
         &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </button></div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <!------------------------------------------------------------------------------------------------------------------------------------>
                                    <?php } ?>



                                </div>
                              

                                <!-- Sidebar Widgets Column -->
                            </div>

</body>
</html>


    </section>
    
    <!-- /.container -->
    <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
                        <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
                        <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                        <script src="includes/assets/js/app.js" type="text/javascript"></script>
                        <script src="includes/assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
                        <script src="includes/assets/lib/masonry-layout/masonry.pkgd.min.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                //-initialize the javascript
                                App.init();

                            });

                            $(window).on('load', function() {
                                App.pageGallery();
                            });
                        </script>
   
</body>


</html>