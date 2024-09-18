     <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Data Tables</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li ><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>User</span></a>
                    <ul class="sub-menu">
                      <li><a href="./users.php">Users</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>
                      
                      <li><a href="userlog.php">User Access Log</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Medical </span></a>
                    <ul class="sub-menu">
                      <li><a href="AddHospital.php">Add Hospital</a>
                      </li>
                      <li><a href="HospitalInfo.php">HospitalInfo</a>
                      </li>
                      <li><a href="AddPatient.php">Add Patient</a>
                      </li>
                      <li><a href="ActivePatients.php">Active Patients</a>
                      </li>
                    </ul>
                  </li><li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Village Places </span></a>
                    <ul class="sub-menu">
                    <li><a href="./addplacecat.php">Add Place category</a></li>
                    <li><a href="./manageplacecat.php">Manage Place category </a></li>

                      <li><a href="./place.php">Add Places</a></li>
                      <li><a href="./manageplace.php">Manage Places</a></li>
                        
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Villagers</span></a>
                    <ul class="sub-menu">
                      <li><a href="Addvillagers.php">Add Villager</a>
                      </li>
                      <li><a href="villagers.php">All Villagers</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>ChatBot</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="chatbot/admin/index.php">Dashboard</a>
                      </li>
                      <li><a href="chatbot/admin/?page=system_info">ChatBot System info</a>
                      </li>
                      <li><a href="chatbot/admin/?page=responses">ChatBot Responces</a>
                      </li>
                      <li><a href="chatbot/admin/?page=unanswered">Ununsered Responces</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Documentation</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>POST-BOX</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>JOB Portal</span></a>
                    <ul class="sub-menu">
                      <li><a href="jobdash.php">Job Dashboard</a>
                      </li>
                      <li><a href="Totaljobs.php">Available Jobs</a>
                      </li>
                      <li><a href="jobcatagory.php">Job Category</a>
                      </li>
                    </ul>
                  </li>


                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        </div>
<div class="be-content">
           
		   <div class="main-content container-fluid">

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Top 5 Frequent Questions</h3>

    <div class="card-tools">
     
    </div>
  </div>
  <div class="card-body">
    <div class="chart">
      <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
<?php

$questions = $conn->query("SELECT * FROM `questions` where id in (SELECT question_id from frequent_asks) ");
$list = array();
while($row = $questions->fetch_assoc()){
  $count = $conn->query("SELECT * FROM frequent_asks where question_id = {$row['id']} ")->num_rows;
  $list[$count] = array("count"=>$count,"question" =>$row['question']);
}
krsort($list);
$label = array();
$data = array();
$i = 5;
foreach($list as $k => $v){
  $i--;
  $label[] = $list[$k]['question'];
  $data[] = $list[$k]['count'];
  if($i == 0)
    break;
}
?>
<script>
	$(function() {
		var areaChartData = {
      labels  : ['<?php echo implode('\',\'',$label) ?>'],
      datasets: [
        {
          label               : 'Frequent Asks',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo implode(',',$data) ?>]
        }
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
		 //-------------
	    //- BAR CHART -
	    //-------------
	    var barChartCanvas = $('#barChart').get(0).getContext('2d')
	    var barChartData = $.extend(true, {}, areaChartData)
	    var temp0 = areaChartData.datasets[0]
	    barChartData.datasets[0] = temp0
      console.log()

	    var barChartOptions = {
	      responsive              : true,
	      maintainAspectRatio     : false,
	      datasetFill             : false
	    }

	    new Chart(barChartCanvas, {
	      type: 'bar',
	      data: barChartData,
	      options: barChartOptions
	    })

	})
</script>