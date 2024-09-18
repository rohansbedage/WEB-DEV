<?php
include_once("db_connect.php");
if(isset($_POST['import_data'])){    
   
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
   
            //fgetcsv($csv_file);            
   
        // Assuming you already have a CSV file handle ($csv_file) and a database connection ($conn).

while (($emp_record = fgetcsv($csv_file)) !== FALSE) {
    // Check if an employee already exists with the same email
    $sql_query = "SELECT * FROM user WHERE email = '" . $emp_record[5] . "'";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:" . mysqli_error($conn));

    // if the employee already exists, update details; otherwise, insert a new record
    if (mysqli_num_rows($resultset)) {
        $sql_update = "UPDATE user SET 
            name='" . $emp_record[1] . "',
            firstname='" . $emp_record[2] . "',
            lastname='" . $emp_record[3] . "',
            Age='" . $emp_record[4] . "',
            alt_email='" . $emp_record[6] . "',
            password='" . $emp_record[7] . "',
            mobile='" . $emp_record[8] . "',
            gender='" . $emp_record[9] . "',
            user_image='" . $emp_record[10] . "',
            address='" . $emp_record[11] . "',
            status='" . $emp_record[12] . "',
            posting_date='" . $emp_record[13] . "',
            watertax='" . $emp_record[14] . "',
            Propertytax='" . $emp_record[15] . "',
            Penalty='" . $emp_record[16] . "',
            Paymentstatus='" . $emp_record[17] . "',
            home='" . $emp_record[18] . "' WHERE email = '" . $emp_record[5] . "'";
        mysqli_query($conn, $sql_update) or die("database error:" . mysqli_error($conn));
    } else {
        $mysql_insert = "INSERT INTO user (name, firstname, lastname, Age, email, alt_email, password, mobile, gender, user_image, address, status, posting_date, watertax, Propertytax, Penalty, Paymentstatus, home)
            VALUES ('" . $emp_record[1] . "', '" . $emp_record[2] . "', '" . $emp_record[3] . "', '" . $emp_record[4] . "', '" . $emp_record[5] . "', '" . $emp_record[6] . "', '" . $emp_record[7] . "', '" . $emp_record[8] . "', '" . $emp_record[9] . "', '" . $emp_record[10] . "', '" . $emp_record[11] . "', '" . $emp_record[12] . "', '" . $emp_record[13] . "', '" . $emp_record[14] . "', '" . $emp_record[15] . "', '" . $emp_record[16] . "', '" . $emp_record[17] . "', '" . $emp_record[18] . "')";
        mysqli_query($conn, $mysql_insert) or die("database error:" . mysqli_error($conn));
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
header("Location: users.php".$import_status);
