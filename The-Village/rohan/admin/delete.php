<?php

include_once 'dbconnection.php';

if(isset($_GET['id']))
{
  $delete_id = $_GET['id'];
  $sql_delete = mysqli_query($con,"DELETE FROM message WHERE id='$delete_id'");
  if($sql_delete)
  {
    header('location: viewallnotification.php');
  }
  else
  {
    echo mysqli_error($con);
  }
}

?>