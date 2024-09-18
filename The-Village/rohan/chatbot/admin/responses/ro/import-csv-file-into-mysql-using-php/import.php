<?php
include_once("db_connect.php");
if(isset($_POST['import_data'])){    
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
            //fgetcsv($csv_file);            
            // get data records from csv file
            while(($record = fgetcsv($csv_file)) !== FALSE){
                // Check if employee already exists with same email
                $sql_query = "SELECT id, name, password, mobile , gender, address , status , posting_date FROM user WHERE email = '".$record[2]."'";
                $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
				// if employee already exist then update details otherwise insert new record
                if(mysqli_num_rows($resultset)) {                     
					$sql_update = "UPDATE user set name='".$record[1]."', password='".$record[3]."',  mobile='".$record[4]."', gender='".$record[5]."', address ='".$record[6]."',status='".$record[7]."', posting_date='".$record[8]."' WHERE email = '".$record[2]."'";
                    mysqli_query($conn, $sql_update) or die("database error:". mysqli_error($conn));
                } else{
					$mysql_insert = "INSERT INTO user (name, email, password, mobile , gender, address ,  status ,posting_date )VALUES('".$record[1]."', '".$record[2]."', '".$record[3]."', '".$record[4]."',".$record[5]."',".$record[6]."',".$record[7]."',".$record[8]."')";
					mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn)); 
                }
            }            
            fclose($csv_file);
            $import_status = '?import_status=success';
        } else {
            $import_status = '?import_status=error';
        }
    } else {
        $import_status = '?import_status=invalid_file';
    }
}
header("Location: index.php".$import_status);
?>