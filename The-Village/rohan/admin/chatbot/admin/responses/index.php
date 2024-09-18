
     <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Tables</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li class="active"><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>

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
                  </li>
                  <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Village Places </span></a>
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
                      <li><a href="chatbot/admin/index.php">Dashboard</a>
                      </li>
                      <li><a href="chatbot/admin/?page=system_info">ChatBot System info</a>
                      </li>
                      <li class="active"><a href="chatbot/admin/?page=responses">ChatBot Responces</a>
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
                                
                                
                             
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        </div>


        <div class="be-content">
           
            <div class="main-content container-fluid">

           <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                   

                        <div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8 my-3">
<h3 class="mb-0">List of Questions Responses</h3>
</div>
<div class="col-4 text-right">
<a href="?page=responses/manage" class="btn btn-md btn-primary">Create New</a>
</div>

</div>
</div>

	
	<div class="card-body">
		<div class="container-fluid">
		<table class="table table-striped table-hover table-fw-widget" id="table3">
				<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="60%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr> 
						<th>#</th>
						<th>Question</th>
						<th>Response</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT q.id, r.response_message, q.question FROM `questions` q inner join `responses` r on q.response_id = r.id order by q.question asc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr class="odd gradeX">
							<td class="text-center"><?php echo $i++; ?></td>
							<td><?php echo $row['question'] ?></td>
							<td><span class="truncate"><?php echo $row['response_message'] ?></span></td>
							<td align="center">
								 <button type="button" class="btn btn-flat btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
				                    <a class="dropdown-item" href="?page=responses/manage&id=<?php echo $row['id'] ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
                      
						</tr>
                        
					<?php endwhile; ?>
                    <br> 
				</tbody>
            <br> 
               
			</table>
            <br> 
            <br> 
          
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this data?","delete_question",[$(this).attr('data-id')])
		})
		$('.table').dataTable();
	})
	function delete_question($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_response",
			method:"POST",
			data:{id: $id},
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>