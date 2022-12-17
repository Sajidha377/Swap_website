<?php
  require("validate-user.php");

  //connect to the database server
  require("db_connection.php");

  //copying the form field values into variables
  $user_first_name = $_REQUEST['user_first_name'];
  $user_last_name = $_REQUEST['user_last_name'];
  $user_id = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];
  $mobile_number = $_REQUEST['mobile_number'];

  //lets build the dynamic sql commands
  $sql = "update user set ";
  $sql .= "user_first_name='$user_first_name',";
  $sql .= "user_last_name='$user_last_name',";
  $sql .= "user_id='$user_id',";
  $sql .= "mobile_number='$mobile_number' where user_id='$user_id'";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){
    // echo "Update Successful";
    $_SESSION['status'] = "Updated Account Successfully!!";
    header("location:user-account.php?status=pass");
  }
  else{
    // echo "Update failed";
    $_SESSION['status'] = "Updating Account Failed!!";
    header("location:user-account.php?status=fail");
  }
