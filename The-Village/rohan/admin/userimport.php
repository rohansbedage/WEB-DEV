<?php 

include_once("db_connect.php");
if(!empty($_GET['import_status'])) {
    switch($_GET['import_status']) {
        case 'success':
            $message_stauts_class = 'alert-success';
            $import_status_message = 'Employee data inserted successfully.';
            break;
        case 'error':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Error: Please try again.';
            break;
        case 'invalid_file':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Error: Please upload a valid CSV file.';
            break;
        default:
            $message_stauts_class = '';
            $import_status_message = '';
    }
}
?>

    <?php if(!empty($import_status_message)){
        echo '<div class="alert '.$message_stauts_class.'">'.$import_status_message.'</div>';
    } ?>
  
			<div class="row">
				<form action="userimport1.php" method="post" enctype="multipart/form-data" id="import_form">				
						<div class="col-md-3">
						<input type="file" name="file" />
						</div>
						<div class="col-md-5">
						<input type="submit" class="btn btn-primary" name="import_data" value="IMPORT">
						</div>			
				</form>
			</div>
			
				
	
        </div>
    </div>		

</div>
