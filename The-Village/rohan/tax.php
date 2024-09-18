<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['update']))
{
	$name=$_POST['name'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $Age=$_POST['Age'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gender'];
  $Propertytax=$_POST['Propertytax'];
  $watertax=$_POST['watertax'];
	$Paymentstatus;
  $total= $watertax+$Propertytax;

	$address=$_POST['address'];

	$a=mysqli_query($con,"update user set name='$name',firstname='$firstname',lastname='$lastname',Age='$Age',mobile='$mobile',gender='$gender',address='$address' where email='".$_SESSION['login']."'");
  if($a)
  {
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>Tax</title>
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" type="text/css" href="includes/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />

    <link rel="stylesheet" type="text/css"
      href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css"
      href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"
      />
    <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />

  </head>
  <body>
  <?php include 'navslider.php';?> 
  

<!-------------------------------------------------------------------------------------------------------------------------------------->



<div class="main-content ">
<div class="container-fluid mt--7 ">
<div class="row ">
<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0 noprint ">
<div class="card card-profile shadow ">
<div class="row justify-content-center ">
<div class="col-lg-3 order-lg-2">
<div class="card-profile-image">
<a href="#">
<img src="" class="rounded-circle">
</a>
</div>
</div>
</div>
<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
<div class="d-flex justify-content-between">
<a href="uside.php" class="btn btn-sm btn-info mr-4">My Account</a>
<a href="#" class="btn btn-sm btn-default float-right">Message</a>
</div>
</div>

<?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?>


<div class="card-body pt-0 pt-md-4">
<div class="row">
<div class="col">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="includes/images/profile.png" alt="Admin" class="rounded-circle p-1" width="110">



</div>
</div>
<div class="text-center">
<h3>
<span class="font-weight-light"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></span>
</h3>
<div class="container"> 
</div>	
<div class="h5 font-weight-300">
<i class="ni location_pin mr-2"></i><?php echo $row['name'];?>
</div>
<div class="h5 mt-4">
<i class="ni business_briefcase-24 mr-2"></i>THE VILLAGE SYSTEM
</div>
<div>
<i class="ni education_hat mr-2"></i><?php echo $row['address'];?>
</div>
<hr>


<div class="row align-items-md-stretch">
  
      <div class="col-md-6 ">
      <div class="text-dark  shadow border rounded-3 bg-light">
         <br>
          <a type="button" class="btn btn-primary btn-lg " href="tax.php">Pay Your Tax</a>
          <br><br>
        </div>
      </div>
     
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3 bg-light">
         <br>
          <a type="button" class="btn btn-primary  btn-lg " href="mail.php">Complaint Mail</a>
          <br><br>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="row align-items-md-stretch mx-2">
  
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3 bg-light">
         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a type="button" class="btn btn-primary btn-lg " href="userdocs.php">Documentation</a>
          <br><br>
        </div>
      </div>
     
      <div class="col-md-6">
      <div class="text-dark  shadow border rounded-3 bg-light">
         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a type="button" class="btn  btn-primary btn-lg " href="chatbot/uside.php">Village ChatBot</a>
          <br><br>
        </div>
      </div>
    </div><br>
  



<?php } ?>
</div>
</div>
<style type="text/css">

@media print
{
.noprint {display:none;}
}

@media screen
{

}


</style>

<div class="col-xl-8 order-xl-1 bg-light shadow">

<br>




<?php
$query=mysqli_query($con,"select * from user where email='".$_SESSION['login']."'");
	 while($row=mysqli_fetch_array($query))
	 {
	  ?>





                            <table class="table  table-bordered " style="width:100%;margin:auto;text-align:left;">
                        <tbody>									
							<tr>
                                <td rowspan="2" colspan="2"><h3 style="margin:8px 0 0 63px;">WATER/PROPERTY TAX </h3></td>
                                <td>MOBILE NO</td>
								<td colspan="2"><?php echo $row['mobile'];?></td>
                            </tr>									
                            <tr>
                                <td>Email :</td>  
								<td colspan="2"><?php echo $row['email'];?></td>  											
                            </tr>
							<tr>
								<td colspan="2">WATER/PROPERTY TAX PAYMENT STATUS : </td>
								<td colspan="3"><?php echo $row['Paymentstatus'];?></td>
							</tr>
							<tr>
								<td colspan="2">Tax Period</td>

                
								<td colspan="3">
      
                
                
                
                
                
                
                
                
                25-3-2021      to 25-6-2021 
              
         
              
              </td>
							</tr>
                            <tr>
                                <td>Property Owner Name</td>
                                <td colspan="1"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                                <td width="150">Tax Details</td>
                                <td width="50">RS</td>
								<td width="50">00</td>
                            </tr>	
							<tr>
								<td rowspan="6">Home Address</td>
								<td rowspan="6" width="50%"><?php echo $row['address'];?>	</td>
								<td>Property Tax</td>
								<td><?php echo $row['Propertytax'];?></td>	
								<td>00</td>
							</tr>
							<tr>	
								
							</tr>
							<tr>
							
							</tr>
							<tr>
								<td>Water Tax</td>
								<td><?php echo $row['watertax'];?></td>	
								<td>00</td>
							</tr>
							<tr>
								<td>Penalty </td>
								<td><?php echo $row['Penalty'];?></td>
								<td>00</td>
							</tr>
							<tr>


              
								<td>Total</td>
								<td>
                <?php


echo $row['Penalty'] + $row['Propertytax'] + $row['watertax'];


?>


          
                
                
                </td>
								<td>00</td>
							</tr>
							<tr>
								<td colspan="5">Amount in words :
								
								
								<?php
 
$number = $row['Penalty'] + $row['Propertytax'] + $row['watertax'];



   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo $result . "Rupees  " ;
 ?> 
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
            						
								
								
       
								
	
								
								
								
								
								</td>
							</tr>
							<tr>
								<td>Depositer Signature</td>
								<td><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
								<td>Office Manager signature</td>
								<td colspan="2">
              
              <img src="includes/images/sign.png" alt="" width="100" height="50">
              
              </td>
							</tr>
						</tbody>
					</table>
         
					<br>
         
     
          </div>
	</div>
</div>


<?php if ($row['Paymentstatus'] !='paid') : ?>
  
  <h4 class="display-6 font-weight-normal shadow-lg col-xl-8 order-xl-1 noprint p-3 mb-4 alert-primary rounded text-light"> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
  Click here to pay your tax :
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a class="btn btn-light mx-8" href="pay.php" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  

     <?php endif ?>		
     <?php if ($row['Paymentstatus'] =='paid') : ?>
  
      <h4 class="display-6 font-weight-normal shadow-lg col-xl-8 order-xl-1 noprint p-3 mb-4 alert-primary rounded text-light"> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    Click here to Print Your Bill :
     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="btn btn-light mx-8"  href="javascript:window.print()" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
       <?php endif ?>	
 
          </div>		
  
		



		
 
</div>
</div>
</div>
</div>
</div>




<footer class="footer">
<div class="row align-items-center justify-content-xl-between">
<div class="col-xl-6 m-auto text-center">

</div>
</div> <?php } ?>
</footer>

</body>
	<script type="text/javascript">
		</script>
</body>
</html>



<script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="includes/assets/js/app.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
            <script src="includes/assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    App.init();
                    App.dataTables();
                });
            </script>



    
    
  </body>

</html>






