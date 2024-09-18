<?php 

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$edu=$_POST["edu"];
	$address=$_POST["address"];

	$ids=$_POST["ids"];
    $uname=$_POST["uname"];
    
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "admin/uploads/".$filename;
    move_uploaded_file($tempname, $folder);


$connect = mysqli_connect("localhost", "root", "", "rohan");




$query2 = "INSERT INTO appliedjobs (name,email,mobile,edu,address,job,uname,temp,img) VALUES ('$name','$email','$mobile','$edu','$address','$ids','$uname',0,'$filename')";
$result2 = mysqli_query($connect, $query2);



echo"<script type='text/javascript'>window.location.href='appliedjob.php';</script>"; 
}else{
    echo "problem";
}






?>