<?php
  require("validate-admin.php");

  //connect to the database server
  require("db_connection.php");

  //copying the form field values into variables
  $admin_first_name = $_REQUEST['admin_first_name'];
  $admin_last_name = $_REQUEST['admin_last_name'];
  $admin_id = $_REQUEST['admin_id'];
  $admin_mobile_number = $_REQUEST['admin_mobile_number'];

  //lets build the dynamic sql commands
  $sql = "update admin set ";
  $sql .= "admin_first_name='$admin_first_name',";
  $sql .= "admin_last_name='$admin_last_name',";
  $sql .= "admin_id='$admin_id',";
  $sql .= "admin_mobile_number='$admin_mobile_number' where admin_id='$admin_id'";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){
    // echo "Update Successful";
    $_SESSION['status'] = "Updated Account Successfully!!";
    header("location:admin.php?status=pass");
  }
  else{
    // echo "Update failed";
    $_SESSION['status'] = "Updating Account Failed!!";
    header("location:admin.php?status=fail");
  }
