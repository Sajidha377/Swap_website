<?php

//start the session
session_start();

//connect the database server
require("db_connection.php");

//copying the form field values into variables
$admin_id = $_SESSION['admin_id'];
$admin_new_access_code = $_REQUEST['admin_new_access_code'];

$encrypted_pwd = crypt($admin_new_access_code, 'x091');

//lets build the dynamic sql commands
$sql = "update admin set ";
$sql .= "admin_access_code='$encrypted_pwd' where admin_id='$admin_id'";

//execute the sql command
$x = $mysqli->query($sql);

if($x > 0){
  // echo "Update Successful";
  $_SESSION['status'] = "Changed Successfully!!";
  header("location:admin.php?status=pass");
}
else{
  // echo "Update failed";
  $_SESSION['status'] = "Changing Password Failed!!";
  header("location:admin.php?status=fail");
}
