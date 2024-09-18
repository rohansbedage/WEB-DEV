<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'rohan');
$sql = "SELECT * FROM schmedetail";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $name=$_POST['name'];
    $detail= $_POST['detail'];
    $da= $_POST['date'];
    $cat= $_POST['catagory'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;
    

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    
    
    move_uploaded_file($file, $destination);
    
    
        // move the uploaded (temporary) file to the specified destination
        
            $sql = "INSERT INTO schmedetail (pdf, name, des,date,cat) VALUES ('$filename', '$name', '$detail','$da','$cat')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
   

?>