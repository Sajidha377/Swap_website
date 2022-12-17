<?php

//start the session
session_start();

//connect the database server
require("db_connection.php");

//copying the form field values into variables
$user_id = $_SESSION['user_id'];
$new_access_code = $_REQUEST['new_access_code'];

$encrypted_pwd = crypt($new_access_code, 'x091');

//lets build the dynamic sql commands
$sql = "update user set ";
$sql .= "access_code='$encrypted_pwd' where user_id='$user_id'";

//execute the sql command
$x = $mysqli->query($sql);

if($x > 0){
  // echo "Update Successful";
  $_SESSION['status'] = "Changed Successfully!!";
  header("location:user-account.php?status=pass");
}
else{
  // echo "Update failed";
  $_SESSION['status'] = "Changing Password Failed!!";
  header("location:user-account.php?status=fail");
}



 ?>
