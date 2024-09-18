<?php 
$con = mysqli_connect("localhost", "root", "", "project")or die($mysqli_error($con));
$name=$_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];


$user_registration_query="insert into contact_us(name,email,message) values('$name','$email','$message')";
$user_registration_submit=mysqli_query($con,$user_registration_query)or die (mysqli_error($con));

$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('location: contact_us.php');
?>