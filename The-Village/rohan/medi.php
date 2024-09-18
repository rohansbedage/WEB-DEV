<?php  
$connect = mysqli_connect("localhost", "root", "", "rohan");
$querymain = "SELECT * FROM patient";
$resultmain=mysqli_query($connect,$querymain);
$rowsmain = mysqli_num_rows($resultmain);

$query2 = "SELECT * FROM patient WHERE PatientStatus='Active'";
$result2=mysqli_query($connect,$query2);
$rowsactive = mysqli_num_rows($result2);

$query3 = "SELECT * FROM patient WHERE PatientStatus='Recovered'";
$result3=mysqli_query($connect,$query3);
$rowsrecovered = mysqli_num_rows($result3);

$query4 = "SELECT * FROM patient WHERE PatientStatus='Dead'";
$result4=mysqli_query($connect,$query4);
$rowsdead = mysqli_num_rows($result4);

?>

<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>

<head>
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>Medical</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
    
</head>

  <body clas="bg-light">


 <div class="noprint"><?php include 'navslider.php';?> </div> 
      



 <div class="jumbotron jumbotron-fluid bg-light text-center shadow-lg">
<h1 class="display-4">Village Health</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
</div>

    <hr>
<div class="container col-xl-10 col-xxl-8 px-4 py-5 ">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class=" fw-bold lh-1 mb-3">Village Corona Cases Detailed Information</h1>
       <br>
        <div class="row my-5 shadow-lg">
          
            <div class="col-4 ">
                      
                  
                         
                          <h3>  <div class="desc fw-bold">Active  Patients</div>
                         
                            <div class="value"></span><span class="number" data-toggle="counter" data-end="<?php echo $rowsactive ?>">0</span>
                            </div></h3>
                      
                      
            </div>
            <div class="col-4">
                       
                     
                       
                          <h3> <div class="desc ">  Recovered </div>
                            <div class="value text-success"></span><span class="number" data-toggle="counter" data-end="<?php echo $rowsrecovered ?>">0</span>
                           
                         
                        </div>
            </div>
            <div class="col-4 ">
                  
                         
                          <h3>  <div class="desc">Dead Patients</div>
                            <div class="value text-danger"></span><span class="number" data-toggle="counter" data-end="<?php echo $rowsdead ?>">0</span>
                          
                       
                        </div>
            </div>
   
            </div>






        
        </p>
      </div>
      
      <div class="col-md-10 mx-auto col-lg-5">
      <?php 
$year = date("Y");
$connect = mysqli_connect("localhost", "root", "", "rohan");
$query = "SELECT * FROM patient";
$result = mysqli_query($connect, $query);
$chart_data = '';
?>

<div class="container" style="width:900px;"></br></br></br></br>
<div id="container" style="width: 500px; height: 400px;"></div>
       
 <?php 
 $activepatient = ($rowsactive/$rowsmain)*100;
 $recoveredepatient = ($rowsrecovered/$rowsmain)*100;
 $deadpatient = ($rowsdead/$rowsmain)*100;
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Active',     <?php echo $activepatient ?>],
          ['Recovered',      <?php echo $recoveredepatient ?>],
          ['Dead',  <?php echo $deadpatient ?>],
          
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  

  <script src="anychart-base.min.js" type="text/javascript"></script>
    <script>
      anychart.onDocumentLoad(function () {
        var chart = anychart.pie();
        chart.data([
          ["Active", <?php echo $activepatient ?>],
          ["Recovered", <?php echo $recoveredepatient ?>],
          ["Dead", <?php echo $deadpatient ?>],
         
        ]);
       
        chart.title("Corona Patient Graph");
        chart.container("container");
        chart.draw();
      });
    </script>
      </div>
    </div>
  </div>
  </div> </div>



 <div class="jumbotron jumbotron-fluid bg-light">
  <div class="container ">

  <div class="jumbotron jumbotron-fluid bg-light text-center shadow-sm">
  <div class="container">
    <h1 class="display-4">Available Hospital Bed's Status</h1>
    <p class="lead">Below are the detailed information About perticular Hospital Bed Status , swipe right to check more Hospitals.</p>
  </div>
</div>

  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css'>
<script>
$('.owl-carousel').owlCarousel({
    loop:false,
  stagePadding: 15,
    margin:10,
    nav:true,
  navText : ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>','<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
    responsive:{
        0:{
            items:1
        },
        640:{
            items:2
        },
      960:{
            items:3
        },
        1200:{
            items:4
        }
    }
})
  


</script>

  

</head>

<body translate="no" class="bg-light" >
  <div class="uk-margin bg-light"></div>
<div class="uk-section bg-light"><div class="owl-carousel owl-theme bg-light">
<?php 
$query=mysqli_query($con,"Select id,HospitalName,AvailableNormalBeds,TotalNormalBeds,AvailableVentilatorBeds,TotalVentilatorBeds,AdmitDate,UpdationDate from  hospital where hospitalStatus='Active'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>   <div class="card text-center   shadow-lg my-2" style="width: 20rem;">
<div class="card-body ">
        <br>
       
 
        <a href="#" class="btn btn-lg btn-primary shadow-lg text-uppercase"><?php echo htmlentities($row['HospitalName']);?></a>
        <hr>


           <h4 class="text-success shadow-lg"><br>  <b> Available Normal Beds : <br> <?php echo htmlentities($row['AvailableNormalBeds']);?> <br><br></b> </h4><hr>
            <h4 class="text-success shadow-lg"> <br> <b> Hospital Ventilator Bed : <br> <?php echo htmlentities($row['AvailableVentilatorBeds']);?></b> <br><br></h4><hr>
    
            </div>
          
    </div>
    <?php $cnt++; } ?>
    
</div>
  </div>

  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>
      <script id="rendered-js" >
$('.owl-carousel').owlCarousel({
  loop: false,
  stagePadding: 15,
  margin: 10,
  nav: true,
  navText: ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>', '<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
  responsive: {
    0: {
      items: 1 },

    640: {
      items: 2 },

    960: {
      items: 3 },

    1200: {
      items: 4 } } });

    </script>

  

</body>
<div class="jumbotron jumbotron-fluid bg-light text-center my-3 shadow-sm">
  <div class="container">
  <h1 class="display-4">Vaccination Centres</h1>
  <p class="lead">Here is the list of hospital where you can get Corona Vaccine.</p>
  <p><h4>(Get Pre-Appointment on calling their Contact number.)*</h4></p>
      
  <div class="titlepage">  
 <h2></h2>
      </div>
      <?php
$result=file_get_contents('https://spreadsheets.google.com/feeds/list/1Shdh8t0Lj1BsH3H1ypkmxb_T1RBZJEQOdYi7vGpc5Yw/od6/public/basic?alt=json');

$arr=json_decode($result,true);
$data=$arr['feed']['entry'];
?>
<br><br>
<table class="table table-bordered table-striped my-3">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Avalable vaccines</th>
      <th scope="col">Hospital Contact no</th>
    </tr>
  </thead>
	<?php 
	$i=1;
	foreach($data as $list){
		$str=$list['content']['$t'];
		$arr=explode(",",$str);
		$emailArr=explode(":",$arr[0]);
        $avak=explode(":",$arr[1]);
        $kiman=explode(":",$arr[2]);
       
        
		echo "<tr>
			<td>$i</td>
            <td>".$emailArr[1]."</td>
            <td>".$avak[1]."</td>
            <td>".$kiman[1]."</td>
           
			
          </tr>";
		$i++;
	}
	?>
</table></br></br>
  </div>
</div>
</html>
 </div>
</div>



<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="includes/assets/js/app.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="includes/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
            App.dashboard();

        });
    </script>
</body>


</html>