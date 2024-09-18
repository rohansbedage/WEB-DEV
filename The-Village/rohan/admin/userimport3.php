<?php
include_once("db_connect.php");
if(isset($_POST['import_data'])){    
   
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
   
            //fgetcsv($csv_file);            
            while (($emp_record = fgetcsv($csv_file)) !== FALSE) {
                // Check if a patient already exists with the same name
                if (!empty($emp_record[1])) {
                    $sql_query = "SELECT * FROM patient WHERE PatientName = '" . $emp_record[1] . "'";
                    $resultset = mysqli_query($conn, $sql_query) or die("database error:" . mysqli_error($conn));
            
                    // Convert the date strings to MySQL timestamp format (if they are in 'DD-MM-YYYY HH:MM' format)
                    $admitDate = date('Y-m-d H:i:s', strtotime($emp_record[4]));
                    $updationDate = date('Y-m-d H:i:s', strtotime($emp_record[5]));
            
                    // If the patient already exists, update details; otherwise, insert a new record
                    if (mysqli_num_rows($resultset)) {
                        $sql_update = "UPDATE patient SET 
                            Age='" . $emp_record[2] . "',
                            gender='" . $emp_record[3] . "',
                            AdmitDate='" . $admitDate . "',
                            UpdationDate='" . $updationDate . "',
                            PatientStatus='" . $emp_record[6] . "'
                            WHERE PatientName = '" . $emp_record[1] . "'";
                        mysqli_query($conn, $sql_update) or die("database error:" . mysqli_error($conn));
                    } else {
                        $mysql_insert = "INSERT INTO patient (PatientName, Age, gender, AdmitDate, UpdationDate, PatientStatus)
                            VALUES ('" . $emp_record[1] . "', '" . $emp_record[2] . "', '" . $emp_record[3] . "', '" . $admitDate . "', '" . $updationDate . "', '" . $emp_record[6] . "')";
                        mysqli_query($conn, $mysql_insert) or die("database error:" . mysqli_error($conn));
                    }
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
header("Location: AddPatient.php".$import_status);
