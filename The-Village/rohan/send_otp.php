<?php
session_start();
$con=mysqli_connect('localhost','root','','rohan');
$email=$_POST['email'];
$res=mysqli_query($con,"select * from user where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($con,"update user set otp='$otp' where email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer($html,$email);
	echo "yes";
    
}else{
	echo "not_exist";
}

function smtp_mailer($html,$email){
	
	include("includes/smtp/PHPMailerAutoload.php");
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="thevillagemahableshwar@gmail.com";
	$mail->Password="Thevillage@123";
	$mail->SetFrom("thevillagemahableshwar@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="OTP for verification";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	
}




?>