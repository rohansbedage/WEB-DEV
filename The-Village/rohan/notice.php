 
<style type="text/css">
    .sidebar-page-container .sidebar .sidebar-post .post-inner .post{
	position: relative;
	padding: 0px 0px 0px 75px;
	padding-bottom: 10px;
	margin-bottom: 6px;
	border-bottom: 1px solid #e5e5e5;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post:last-child{
	border-bottom: none;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .post-date{
    position: absolute;
    left: 0px;
    top: 4px;
    width: 54px;
    height: 54px;
    text-align: center;
    border-radius: 5px;

}
.sidebar-page-container .sidebar .sidebar-post .post-inner .post .post-date{
background: rgb(2,0,36);
background: -moz-linear-gradient(rgba(0,123,255,1) 100%);
background: -webkit-linear-gradient(rgba(0,123,255,1) 100%);
background: linear-gradient(rgba(0,123,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#007bff",GradientType=1);
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .post-date p{
    display: block;
    font-size: 18px;
    font-weight: 500;
    color: #fff;
    text-align: center;
    margin:0px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .post-date span{
    position: relative;
    display: block;
    font-size: 13px;
    line-height: 18px;
    text-transform: uppercase;
    color: #fff;
    margin:0px;
    padding:0px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .file-box{
	position: relative;
	margin-bottom: 9px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .file-box i{
    position: relative;
    display: inline-block;
    font-size: 14px;
    color: #666666 !important;
    margin-right: 10px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post .file-box p{
    position: relative;
    display: inline-block;
    margin-bottom:0px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post h5{
	position: relative;
	display: block;
	font-size: 18px;
	line-height: 50px;
	font-weight: 500;
	margin-bottom: 0px;
	
	margin:0px;
}

.sidebar-page-container .sidebar .sidebar-post .post-inner .post h5 a{
	display: inline-block;
	color: #1d165c;
}
.sidebar-page-container .sidebar .sidebar-post .post-inner .post h5 a:hover{
	color: #e61819;	
}
.carousel-inner-data{
  margin:0px auto;
  height:200px;
  overflow:hidden;
}
.carousel-inner-data ul{
  list-style:none;
  position:relative;
}
.carousel-inner-data li{
  height:auto;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<div class="card shadow">
  <div class="card-header">
  <h3><b> The Village Important Notice/News</b> </h3>
  <hr>
  </div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 sidebar-page-container">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-post">
                        <div class="widget-title">
                           
                        </div>
                        <br>
                        <div class="post-inner">
                                <div class="carousel-inner-data">
                                    <ul>
                                    <?php 
                $connect = mysqli_connect("localhost", "root", "", "rohan");



                $query = "SELECT * FROM home1";
                $result = mysqli_query($connect, $query);
                
                while($row = mysqli_fetch_array($result))
{
 $pop = $row["name"];
 $lit = $row["des"];
 $day = $row["day"];
 $date   = $row["month"];
 
?>





                                        <li>
                                        <div class="post">
                                            <div class="file-box"><i class="far fa-folder-open"></i><p><?php echo $pop; ?></p></div>
                                            <h5><?php echo $lit; ?></h5>
                                        </div>
                                        </li>


                                       
                                        <?php   }  ?>

                                    </ul>
                                    
                                </div>
                                <br><br><br>
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
</div>	
</div>	
</div>	

<!------------------------------------------------------ Village---------------------------------------------------------------------------->

<script type="text/javascript">
	$(function(){
      var tickerLength = $('.carousel-inner-data ul li').length;
      var tickerHeight = $('.carousel-inner-data ul li').outerHeight();
      $('.carousel-inner-data ul li:last-child').prependTo('.carousel-inner-data ul');
      $('.carousel-inner-data ul').css('marginTop',-tickerHeight);

      function moveTop(){
        $('.carousel-inner-data ul').animate({
          top : -tickerHeight
      },600, function(){
       $('.carousel-inner-data ul li:first-child').appendTo('.carousel-inner-data ul');
       $('.carousel-inner-data ul').css('top','');
   });

    }
    setInterval( function(){
        moveTop();
    }, 3000);
});	</script>
    