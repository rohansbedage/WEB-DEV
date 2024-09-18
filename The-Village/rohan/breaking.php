<?php
$connect = mysqli_connect("localhost", "root", "", "rohan");
date_default_timezone_set("Asia/Kolkata");



$query3="delete from breakingnews where DATEDIFF(now(), breakingnews.Post_Date) > 1;";
$saurabh = mysqli_query($connect, $query3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">


        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <!--head-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    
    <!--start code-->
    <div class="row py-2">
        <!--Breaking box-->
        <div class="col-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
            <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
                <span class="fas fa-bolt" title="Breaking News"></span>
                <span class="d-none d-md-inline-block">Breaking</span>
            </div>
        </div>
        <!--Breaking content-->
        <div class="col-11 col-md-9 col-lg-10 pl-1 pl-md-2">
            <div class="breaking-box pt-2 pb-1">
           
                <!--marque-->
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
                <?php 
                $connect = mysqli_connect("localhost", "root", "", "rohan");



                $query = "SELECT * FROM breakingnews    ";
                $result = mysqli_query($connect, $query);
                
                while($row = mysqli_fetch_array($result))
{
 $pop = $row["Name"];
 $lit = $row["des"];

 
?>
                
                  <a class="h6 font-weight-light"><span class="position-relative mx-2 badge badge-primary rounded-0"><?php echo $pop; ?></span> <?php echo $lit; ?></a>
                 
               
               <?php   }  ?>
               
                </marquee>
            </div>
        </div>
    </div>
	<!--end code-->
	

</div>	<script type="text/javascript">
		</script>
</body>
</html>
