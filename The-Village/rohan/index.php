
<!DOCTYPE html>
<html lang="en">


<head>
  
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
</head>

  <body class="bg-light">

  <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
            
                <div class="page-title"><a href="home.php" class="text-dark"> THE VILLAGE</a></div>

<div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="includes/images/avatar.png" alt="Avatar"><span class="user-name"></span></a>
                            

                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name"></div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="uside.php"><span class="icon mdi mdi-face"></span>Account</a>
                                <a class="dropdown-item" href="logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                          
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">

                                                      
               
</ul>                    

                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    
                                </li>

 


        </nav>
        <header class="d-flex justify-content-center py-3 shadow">
      <ul class="nav nav-pills ">
     <h4> <li class="nav-item shadow-lg"><a href="" class="nav-link active" aria-current="page">Home</a></li></h4>  &nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="tourplaces.php" class="nav-link active">Tourists Places</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="touristhotels.php" class="nav-link active">Hotels</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="medi1.php" class="nav-link active">Village Health</a></li></h4>&nbsp;&nbsp;&nbsp;
      <h4>  <li class="nav-item shadow-lg"><a href="placecategory1.php" class="nav-link active">Inside The Village</a></li></h4>&nbsp;&nbsp;&nbsp;
      
    </ul>
    </header>
  </div>


  <div class="jumbotron jumbotron-fluid bg-light text-center shadow">
  <div class="container">
    <h1 class="display-4">Welcome To The Village </h1>
    <p class="lead">Visitors Page.</p>
  </div>
</div>
 
<!------------------------------------------------------------------------------------------------------------------------>

  <div class="container text-center ">
    <h1 class="display-4"></h1>

</div>

<div class="container my-5 ">

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mx-5">
      <div class="col-10 col-sm-8 col-lg-6 ">
      <?php 
$year = date("Y");

$connect = mysqli_connect("localhost", "root", "", "rohan");
$query = "SELECT * FROM villagers";
$result = mysqli_query($connect, $query);
$chart_data = '';

?>
<?php  
$querymain = "SELECT * FROM villagers";
$resultmain=mysqli_query($connect,$querymain);
$rowsmain = mysqli_num_rows($resultmain);

$query2 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Infants'";
$result2=mysqli_query($connect,$query2);
$rowsinfants = mysqli_num_rows($result2);

$query3 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Children'";
$result3=mysqli_query($connect,$query3);
$rowschildren = mysqli_num_rows($result3);

$query4 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Teenagers'";
$result4=mysqli_query($connect,$query4);
$rowsteen = mysqli_num_rows($result4);

$query5 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Adults'";
$result5=mysqli_query($connect,$query5);
$rowsadult = mysqli_num_rows($result5);

$query6 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Older Adults'";
$result6=mysqli_query($connect,$query6);
$rowsold = mysqli_num_rows($result6);


?>


   

<center><div id="container" style="width: 500px; height: 400px;"></div></center>
        

 <?php 
 $infants = ($rowsinfants/$rowsmain)*100;
 $child = ($rowschildren/$rowsmain)*100;
 $teen = ($rowsteen/$rowsmain)*100;
 $adult = ($rowsadult/$rowsmain)*100;
 $old = ($rowsold/$rowsmain)*100;
?>
 


  

  <script src="anychart-base.min.js" type="text/javascript"></script>
    <script>
      anychart.onDocumentLoad(function () {
        // create an instance of a pie chart
        var chart = anychart.pie();
        // set the data
        chart.data([
          ['Infants',     <?php echo $infants ?>],
          ['childrean',      <?php echo $child ?>],
          ['Teenagers',  <?php echo $teen ?>],
          ['Adult',  <?php echo $adult ?>],
          ['Old',  <?php echo $old ?>],
         
        ]);
       
     // set chart title
        chart.title("Total");
        // set the container element 
        chart.container("container");
        // initiate chart display
        chart.draw();
      });
    </script>

      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Demography</h1>
        <p >              As of 2011 India census, Mahabaleshwar had a population of 12,737. Males constituted 55% of the population and females 45%. Mahabaleshwar had an average literacy rate of 78%, higher than the national average of 74.04%: male literacy was 84%, and female literacy was 71%. In Mahabaleshwar, 11% of the population was at that time under 6 years of age.90% of population speaks Marathi language. 
</p>
       
      </div>
    </div>
  <br>
<hr>

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 my-5">
      <div class="col-10 col-sm-8 col-lg-6 text-center shadow-lg">

        <h1 class="display-5 fw-bold lh-1 mb-3 ">Geography</h1>
        <p>Mahabaleshwar is located on the mountainous Sahyadri range of the Western ghats that run North to south along western coast of India. The coordinates of the town are 17.9237°N 73.6586°E.Mahabaleshwar is a vast plateau measuring 150 km2 (58 sq mi), bound by valleys on all sides. It reaches a height of 1,439 m (4,721 ft) at its highest peak above sea level, known as Wilson/Sunrise Point The town is about 120 km (75 mi) southwest of Pune and 285 km (177 mi) from Mumbai,. Mahabaleshwar comprises three villages: Malcolm Peth, Old "Kshetra" Mahabaleshwar and part of the Shindola village. Mahabaleshwar region is the source of the Krishna River that flows across Maharashtra, Karnataka, Telangana and Andhra Pradesh. The legendary source of the river is a spout from the mouth of a statue of a cow in the ancient temple of Mahadev in Old Mahabaleshwar.Legend has it that Krishna is Lord Vishnu himself as a result of a curse on the trimurti by Savitri. Also, its tributaries Venna and Koyna are said to be Lord Shiva and Lord Brahma themselves. An interesting thing to notice is that 3 other rivers come out from the cow's mouth apart from Krishna and they all travel some distance before merging into Krishna which flows East towards the Bay of Bengal.These rivers are the Koyna, Venna (Veni) and Gayatri. The Savitri river flows Westward via Mahad to the Arabian Sea. Climate of the area is suitable for cultivation of strawberries, Mahabaleshwar strawberry contributes to about 85 percent of the total strawberry production in the country.It also received the geographical indication (GI) tag in 2010.</p>


        
      </div>
      <div class="col-lg-6">
        
      <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=637&amp;height=443&amp;hl=en&amp;q=mahablashwar&amp;t=h&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">FNF Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:443px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:443px;}.gmap_iframe {height:443px!important;}</style></div>
      
       
      </div>
    </div>
    <div class="px-4 pt-5 my-5 text-center border-bottom shadow-lg">
    <h1 class="display-4 fw-bold">Climate</h1>
    <div class="col-lg-12 mx-auto">
      <p>Mahabaleshwar has a borderline tropical monsoon/humid subtropical climate (Am/Cwa). Very heavy rainfall is a normal occurrence during monsoons. During July, 10–12 days of continuous rains with 100–200 mm rains each day can be seen each year .There were reports of ice and ground frost formation around Venna Lake in 2018.On August 7th 2019 Mahabaleshwar recorded 330mm of rain in 24 Hours causing landslides Mahabaleshwar is described as the "New Candidate for the wettest place in the world" the titile currently held by Cherrapunji.</p>
      
    </div>
    <div class="overflow-hidden" style="max-height: 80vh;">


    <!------------------------------------------------------------------------------------------------------------>
          <div class="container px-5">
     <!----------------------------------------------------------------------------------------------------------------------------------->
<div class="jumbotron jumbotron-fluid  bg-light text-center shadow">
  <div class="container">
  <table class="wikitable mw-collapsible mw-made-collapsible" style="width:100%; text-align:center; line-height: 1.2em; margin:auto;">

<tbody><tr>
<th colspan="14"><span class="mw-collapsible-toggle mw-collapsible-toggle-default" role="button" tabindex="0" aria-expanded="true"><a class="mw-collapsible-text"></a></span>Climate data for Mahabaleshwar (1981–2010, extremes 1932–2011)
</th></tr>
<tr>
<th scope="row">Month
</th>
<th scope="col">Jan
</th>
<th scope="col">Feb
</th>
<th scope="col">Mar
</th>
<th scope="col">Apr
</th>
<th scope="col">May
</th>
<th scope="col">Jun
</th>
<th scope="col">Jul
</th>
<th scope="col">Aug
</th>
<th scope="col">Sep
</th>
<th scope="col">Oct
</th>
<th scope="col">Nov
</th>
<th scope="col">Dec
</th>
<th scope="col" style="border-left-width:medium">Year
</th></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Record high °C (°F)
</th>
<td style="background: #FF3E00; color:#000000;">32.4<br>(90.3)
</td>
<td style="background: #FF3400; color:#000000;">33.9<br>(93.0)
</td>
<td style="background: #FF1600; color:#FFFFFF;">38.2<br>(100.8)
</td>
<td style="background: #FF1A00; color:#000000;">37.6<br>(99.7)
</td>
<td style="background: #FF1C00; color:#000000;">37.4<br>(99.3)
</td>
<td style="background: #FF2E00; color:#000000;">34.8<br>(94.6)
</td>
<td style="background: #FF4300; color:#000000;">31.7<br>(89.1)
</td>
<td style="background: #FF5200; color:#000000;">29.6<br>(85.3)
</td>
<td style="background: #FF5400; color:#000000;">29.2<br>(84.6)
</td>
<td style="background: #FF4200; color:#000000;">31.9<br>(89.4)
</td>
<td style="background: #FF4900; color:#000000;">30.8<br>(87.4)
</td>
<td style="background: #FF4800; color:#000000;">31.0<br>(87.8)
</td>
<td style="background: #FF1600; color:#FFFFFF; border-left-width:medium">38.2<br>(100.8)
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Average high °C (°F)
</th>
<td style="background: #FF6800; color:#000000;">26.3<br>(79.3)
</td>
<td style="background: #FF5D00; color:#000000;">27.9<br>(82.2)
</td>
<td style="background: #FF4A00; color:#000000;">30.7<br>(87.3)
</td>
<td style="background: #FF4200; color:#000000;">31.8<br>(89.2)
</td>
<td style="background: #FF4E00; color:#000000;">30.1<br>(86.2)
</td>
<td style="background: #FF7E00; color:#000000;">23.2<br>(73.8)
</td>
<td style="background: #FF942A; color:#000000;">19.9<br>(67.8)
</td>
<td style="background: #FF9730; color:#000000;">19.5<br>(67.1)
</td>
<td style="background: #FF870F; color:#000000;">21.9<br>(71.4)
</td>
<td style="background: #FF6D00; color:#000000;">25.6<br>(78.1)
</td>
<td style="background: #FF6D00; color:#000000;">25.6<br>(78.1)
</td>
<td style="background: #FF6E00; color:#000000;">25.5<br>(77.9)
</td>
<td style="background: #FF6C00; color:#000000; border-left-width:medium">25.7<br>(78.3)
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Average low °C (°F)
</th>
<td style="background: #FFC184; color:#000000;">13.4<br>(56.1)
</td>
<td style="background: #FFBA76; color:#000000;">14.4<br>(57.9)
</td>
<td style="background: #FFA851; color:#000000;">17.1<br>(62.8)
</td>
<td style="background: #FF9D3C; color:#000000;">18.6<br>(65.5)
</td>
<td style="background: #FFA143; color:#000000;">18.1<br>(64.6)
</td>
<td style="background: #FFA64E; color:#000000;">17.3<br>(63.1)
</td>
<td style="background: #FFA954; color:#000000;">16.9<br>(62.4)
</td>
<td style="background: #FFAB58; color:#000000;">16.6<br>(61.9)
</td>
<td style="background: #FFAF5F; color:#000000;">16.1<br>(61.0)
</td>
<td style="background: #FFAF60; color:#000000;">16.0<br>(60.8)
</td>
<td style="background: #FFB973; color:#000000;">14.6<br>(58.3)
</td>
<td style="background: #FFC082; color:#000000;">13.5<br>(56.3)
</td>
<td style="background: #FFAF5F; color:#000000; border-left-width:medium">16.1<br>(61.0)
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Record low °C (°F)
</th>
<td style="background: #FFF7EF; color:#000000;">5.6<br>(42.1)
</td>
<td style="background: #FBFBFF; color:#000000;">3.9<br>(39.0)
</td>
<td style="background: #FFE8D2; color:#000000;">7.7<br>(45.9)
</td>
<td style="background: #FFD1A4; color:#000000;">11.1<br>(52.0)
</td>
<td style="background: #FFC790; color:#000000;">12.5<br>(54.5)
</td>
<td style="background: #FFCB97; color:#000000;">12.0<br>(53.6)
</td>
<td style="background: #FFC994; color:#000000;">12.2<br>(54.0)
</td>
<td style="background: #FFD0A1; color:#000000;">11.3<br>(52.3)
</td>
<td style="background: #FFD5AC; color:#000000;">10.5<br>(50.9)
</td>
<td style="background: #FFD9B3; color:#000000;">10.0<br>(50.0)
</td>
<td style="background: #FFEBD7; color:#000000;">7.4<br>(45.3)
</td>
<td style="background: #FFF1E4; color:#000000;">6.4<br>(43.5)
</td>
<td style="background: #FBFBFF; color:#000000; border-left-width:medium">3.9<br>(39.0)
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Average rainfall mm (inches)
</th>
<td style="background: #FDFFFD; color:#000000;">1.0<br>(0.04)
</td>
<td style="background: #FEFFFE; color:#000000;">0.3<br>(0.01)
</td>
<td style="background: #F5FFF5; color:#000000;">6.1<br>(0.24)
</td>
<td style="background: #DDFFDD; color:#000000;">21.5<br>(0.85)
</td>
<td style="background: #B8FFB8; color:#000000;">47.6<br>(1.87)
</td>
<td style="background: #003000; color:#FFFFFF;">977.7<br>(38.49)
</td>
<td style="background: #003000; color:#FFFFFF;">2,064.4<br>(81.28)
</td>
<td style="background: #003000; color:#FFFFFF;">1,784.3<br>(70.25)
</td>
<td style="background: #003000; color:#FFFFFF;">537.1<br>(21.15)
</td>
<td style="background: #2EFF2E; color:#000000;">140.1<br>(5.52)
</td>
<td style="background: #CDFFCD; color:#000000;">32.3<br>(1.27)
</td>
<td style="background: #F3FFF3; color:#000000;">8.0<br>(0.31)
</td>
<td style="background: #003000; color:#FFFFFF; border-left-width:medium">5,620.3<br>(221.27)
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Average rainy days
</th>
<td style="background: #FDFDFF; color:#000000;">0.1
</td>
<td style="background: #FDFDFF; color:#000000;">0.1
</td>
<td style="background: #FAFAFF; color:#000000;">0.4
</td>
<td style="background: #EEEEFF; color:#000000;">1.3
</td>
<td style="background: #D1D1FF; color:#000000;">3.7
</td>
<td style="background: #0000F8; color:#FFFFFF;">20.5
</td>
<td style="background: #000090; color:#FFFFFF;">29.6
</td>
<td style="background: #000095; color:#FFFFFF;">29.2
</td>
<td style="background: #0606FF; color:#FFFFFF;">19.5
</td>
<td style="background: #A6A6FF; color:#000000;">7.2
</td>
<td style="background: #E2E2FF; color:#000000;">2.2
</td>
<td style="background: #FAFAFF; color:#000000;">0.4
</td>
<td style="background: #8787FF; color:#000000; border-left-width:medium">114.3
</td></tr>
<tr style="text-align: center;">
<th scope="row" style="height: 16px;">Average <a href="/wiki/Relative_humidity" class="mw-redirect" title="Relative humidity">relative humidity</a> (%) <span style="font-size:90%;" class="nowrap">(at 17:30 <a href="/wiki/Indian_Standard_Time" title="Indian Standard Time">IST</a>)</span>
</th>
<td style="background: #4343FF; color:#FFFFFF;">49
</td>
<td style="background: #6969FF; color:#000000;">39
</td>
<td style="background: #6262FF; color:#FFFFFF;">41
</td>
<td style="background: #3B3BFF; color:#FFFFFF;">51
</td>
<td style="background: #0000FD; color:#FFFFFF;">67
</td>
<td style="background: #00009E; color:#FFFFFF;">92
</td>
<td style="background: #000087; color:#FFFFFF;">98
</td>
<td style="background: #000087; color:#FFFFFF;">98
</td>
<td style="background: #000096; color:#FFFFFF;">94
</td>
<td style="background: #0000DB; color:#FFFFFF;">76
</td>
<td style="background: #0A0AFF; color:#FFFFFF;">64
</td>
<td style="background: #2828FF; color:#FFFFFF;">56
</td>
<td style="background: #0000F6; color:#FFFFFF; border-left-width:medium">69
</td></tr>
<tr>
</td></tr>
<tr>
</td></tr></tbody></table>
</div>

  </div>
</div>



 <!------------------------------------------------------------------------------------------------------------------------>


    
    
    
    
    
      </div>
    </div>
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 shadow-lg" >
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="includes/images/farm.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 ">Agriculture</h1>
        <p>Mahabaleshwar strawberry is a strawberry grown in the hilly slopes of Mahabaleshwar, which accounts for about 85 percent of the total strawberry produced in India. Strawberry, along with <strong>raspberry, mulberry and gooseberry,</strong> is produced on a large scale in and around Mahabaleshwar. Mahabaleshwar strawberry obtained the geographical indication (GI) tag in 2010. .</p>
       
      </div>
    </div>
<br><br><br>
  
            <!-- Famous Things -->
            <h3 class="history-heading2"><b>Famous Things</b> </h3>
            <p class="history-para">This place is famous for its strawberries, mapro garden, various points, etc</p>

          
                <div class="gallery-container">
                    <div class="item">
                        <div class="photo">
                            <div class="img"><img src="includes/images/mapro-garden-1067x800.jpg" alt="Gallery Image">
                            <button type="button" class="my-3 image-zoom btn btn-block btn-primary  shadow-lg" href="includes/images/mapro-garden-1067x800.jpg">View Image</button>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <div class="img"><img src="includes/images/wm.jpg" height="145rem" alt="Gallery Image"><br><br>
                            <button type="button" class="my-4 image-zoom btn btn-block btn-primary  shadow-lg" href="includes/images/wm.jpg">View Image</button>
                                
                            </div>
                        </div>
                    </div>                 <div class="item">
                        <div class="photo">
                            <div class="img"><img src="includes/images/strwberry.jpg" alt="Gallery Image">
                            <button type="button" class="my-3 image-zoom btn btn-block btn-primary  shadow-lg" href="includes/images/strwberry.jpg">View Image</button>
                                
                            </div>
                        </div>
                    </div>                 <div class="item">
                        <div class="photo">
                            <div class="img"><img src="includes/images/dss.PNG" height="145rem"  alt="Gallery Image"><br><br>
                            <button type="button" class="my-4 image-zoom btn btn-block btn-primary  shadow-lg" href="includes/images/dss.PNG">View Image</button>
                                
                            </div>
                        </div>
                    </div>
                  
            <!-- // Famous Things -->
          </div>
        </div>
      </section>
    </main>
  </div>
  </div>
  </div>

  <script type="text/javascript">

</script>

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