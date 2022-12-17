<?php
//start the session
session_start();

//connecting the database server
require("db_connection.php");

//to get the values from add-product-1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//storing the form field values into variables
  $user_first_name = $_REQUEST['user_first_name'];
  $user_last_name = $_REQUEST['user_last_name'];
  $user_id = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];
  $mobile_number = $_REQUEST['mobile_number'];

  $encrypted_pwd = crypt($access_code, 'x091');

  

//building a dynamic SQL command
$sql  = "insert into user (user_first_name,user_last_name,user_id,access_code,mobile_number) values(";
$sql .= "'$user_first_name',";
$sql .= "'$user_last_name',";
$sql .= "'$user_id',";
$sql .= "'$encrypted_pwd',";
$sql .= "'$mobile_number')";

//test display the SQL commands
//echo $sql;

//executing the SQL command
$x = $mysqli->query($sql);

if($x>0){
  $_SESSION['user_id'] = $user_id;  
  //echo "record successfully added";
  header("location:index.php?status=pass");
}
else{
  $_SESSION['status'] = "Sign Up Failed!! Email already taken, use another email.";
  //echo "adding record failed";
  header("location:sign-up.php?status=fail");
}

?>
