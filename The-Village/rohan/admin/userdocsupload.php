<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'rohan');
$sql = "SELECT * FROM doc";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $filename2 = $_FILES['myfile2']['name'];
    $filename3 = $_FILES['myfile3']['name'];
    $mobile= $_POST['mobile'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;
    $destination2 = 'uploads/' . $filename2;
    $destination3 = 'uploads/' . $filename3;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
    $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $file2 = $_FILES['myfile2']['tmp_name'];
    $file3 = $_FILES['myfile3']['tmp_name'];
    
    move_uploaded_file($file, $destination);
    move_uploaded_file($file2, $destination2);
    move_uploaded_file($file3, $destination3);
    
        // move the uploaded (temporary) file to the specified destination
        
            $sql = "INSERT INTO doc (adhar, cast, income,mbno) VALUES ('$filename', '$filename2', '$filename3','$mobile')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
   

?>