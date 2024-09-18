<?php 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'admin/uploads/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers

		header("Content-Type: application/pdf");
		

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

 ?>
