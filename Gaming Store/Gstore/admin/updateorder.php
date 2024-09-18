<?php
session_start();

include_once 'include/config.php';
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
$oid=intval($_GET['oid']);
if(isset($_POST['submit2'])){
$status=$_POST['status'];
$remark=$_POST['remark'];//space char

$query=mysqli_query($con,"insert into ordertrackhistory(orderId,status,remark) values('$oid','$status','$remark')");
$sql=mysqli_query($con,"update orders set orderStatus='$status' where id='$oid'");
//}
}

 ?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Update Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="anuj.css" rel="stylesheet" type="text/css">
</head>

<body>

  <?php include 'include/nav.php' ?>

  <br><br>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active shadow-lg" aria-current="page" href="Allusers.php">View All Users</a>
    </li>
    &nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link shadow-lg" href="PendingOrders.php">Pending Orders</a>
    </li>
    &nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link shadow-lg" href="DeliveredOrders.php">Delivered Orders</a>
    </li>
    &nbsp;&nbsp;&nbsp;

    <li class="nav-item">
      <a class="nav-link disabled shadow-lg" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
  </ul>
  <br>

  <div style="margin-left:50px;">
    <form name="updateticket" id="updateticket" method="post" class="shadow-lg">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <br>
        <h1 class="display-4 font-weight-normal  p-3 mb-4 bg-transparent rounded text-dark text-center"> Update Order !
        </h1>

        <br>
        <div class="d-grid gap-2 col-1 mx-auto">
          <button colspan="2" class="btn btn-dark shadow-lg" type="button">order Id:
            <?php echo $oid;?>
          </button>
        </div>

        <?php 
$ret = mysqli_query($con,"SELECT * FROM ordertrackhistory WHERE orderId='$oid'");
     while($row=mysqli_fetch_array($ret))
      {
     ?>


        <div class="container my-2 py-3 z-depth-1">
          <section class="px-md-5 mx-md-5 shadow-lg  dark-grey-text">


            <table class="table table-hover container my-2 py-3 z-depth-1 ">
              <thead>
                <tr>
                  <th>At Date </th>
                  <th>Status</th>
                  <th> Remark </th>


                </tr>
              </thead>
              <tbody>

                <?php 
$ret = mysqli_query($con,"SELECT * FROM ordertrackhistory WHERE orderId='$oid'");
     while($row=mysqli_fetch_array($ret))
      {
      ?>
                <tr class="shadow-sm hr hr hr">

                  <td>
                    <?php echo  $row['postingDate'];?>
                  </td>
                  <td>
                    <?php echo $row['status'];?>
                  </td>

                  <td>
                    <?php echo $row['remark'];?>
                  </td>

                </tr>

                <?php } ?>
            </table>






            <?php } ?>
            <?php 
$st='Delivered';
   $rt = mysqli_query($con,"SELECT * FROM orders WHERE id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <button class="btn btn-success shadow-lg d-grid gap-2  col-3 mx-auto"> Product Delivered </button>

            <br>
            <br>
            <br>


            <?php }else  {
      ?>
            <!--------------------------------------------------------------------------------------------------------------------------------->
            <br><br>

            <div class="container my-2 py-3  z-depth-1">

              <div class="row g-2">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="col-4">
                  <div class="form-floating  ">
                    <select class="form-select  " name="status" required="required">
                      <option selected>Open this select menu</option>
                      <option value="in Process">In Process</option>
                      <option value="Delivered">Delivered</option>

                    </select>
                    <label for="floatingSelectGrid ">Update The Status</label>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-floating ">
                    <input type="text" class="form-control " name="remark" placeholder="Place Your Remark Here!"
                      required="required">
                    <label>Write The Remark:</label>
                  </div>
                </div>
              </div>
              <!--------------------------------------------------------------------------------------------------------------------------------->

              <div class="d-grid gap-2 my-5 col-9 mx-auto">
                <button input type="submit" name="submit2" value="update" class="btn btn-primary shadow-lg"
                  type="button">Update Records!</button>
              </div>
              <h3 class="text-center"> Frequently Used Remarks </h3> <br>
              <h5 class="text-center">&nbsp;&nbsp;&nbsp;&nbsp; Your order has been dispatched from the G-Store facility &nbsp;&nbsp;/&nbsp;&nbsp;Your Order is On The Way ! &nbsp;&nbsp;  <br><br>
             &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
             Your item has been received in the hub nearest to you &nbsp;&nbsp; / &nbsp;&nbsp; Order Delivered Successfully !</h5>
     
              <!--------------------------------------------------------------------------------------------------------------------------------->
              <br>
              <br>
              <br>

              <?php } ?>
      </table>
    </form>
  </div>
  <br><br><br><br>
</body>

</html>
<?php } ?>