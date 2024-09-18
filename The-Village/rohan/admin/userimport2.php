<?php
include_once("db_connect.php");
if(isset($_POST['import_data'])){    
   
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
   

            // Read the CSV file line by line
            while (($villager_record = fgetcsv($csv_file)) !== FALSE) {
                // Check if villager already exists with the same first and last name
                $sql_query = "SELECT * FROM villagers WHERE VillagersFirstName = '" . $villager_record[1] . "' AND VillagersLastName = '" . $villager_record[2] . "'";
                $resultset = mysqli_query($conn, $sql_query) or die("database error:" . mysqli_error($conn));
	
                // If villager already exists, update details; otherwise, insert a new record
                if (mysqli_num_rows($resultset)) {                     
                    $sql_update = "UPDATE villagers SET 
                        VillagersAge='" . $villager_record[3] . "',
                        VillagersGender='" . $villager_record[4] . "',
                        VillagePopulationCategory='" . $villager_record[5] . "',
                        VillagersLiteracy='" . $villager_record[6] . "',
                        VillagersProfession='" . $villager_record[7] . "',
                        hospitalStatus='" . $villager_record[8] . "'
                        WHERE VillagersFirstName = '" . $villager_record[1] . "' AND VillagersLastName = '" . $villager_record[2] . "'";
                    mysqli_query($conn, $sql_update) or die("database error:" . mysqli_error($conn));
                } else {
                    $mysql_insert = "INSERT INTO villagers (VillagersFirstName, VillagersLastName, VillagersAge, VillagersGender, VillagePopulationCategory, VillagersLiteracy, VillagersProfession, hospitalStatus)
                        VALUES ('" . $villager_record[1] . "', '" . $villager_record[2] . "', '" . $villager_record[3] . "', '" . $villager_record[4] . "', '" . $villager_record[5] . "', '" . $villager_record[6] . "', '" . $villager_record[7] . "', '" . $villager_record[8] . "')";
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

header("Location: villagers.php" . $import_status);
