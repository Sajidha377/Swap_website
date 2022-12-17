<?php
  require("validate-admin.php");
  //connecting the database server
  require("db_connection.php");

  //to get the values from add-product-1.php page form and display
  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";


  //storing the form field values into variables
  $admin_first_name = $_REQUEST['admin_first_name'];
  $admin_last_name = $_REQUEST['admin_last_name'];
  $admin_id = $_REQUEST['admin_id'];
  $admin_access_code = $_REQUEST['admin_access_code'];
  $admin_mobile_number = $_REQUEST['admin_mobile_number'];

  $encrypted_pwd = crypt($admin_access_code, 'x091');

  //building a dynamic SQL command
  $sql  = "insert into admin (admin_first_name,admin_last_name,admin_id,admin_access_code,admin_mobile_number) values(";
  $sql .= "'$admin_first_name',";
  $sql .= "'$admin_last_name',";
  $sql .= "'$admin_id',";
  $sql .= "'$encrypted_pwd',";
  $sql .= "'$admin_mobile_number')";

  //test display the SQL commands
  // echo $sql;

  //executing the SQL command
  $x = $mysqli->query($sql);

  if($x>0){
    //echo "record successfully added";
    $_SESSION['status'] = "Sign Up Successfull!!";
    header("location:admin.php?status=pass");
  }
  else{
    //echo "adding record failed";
    $_SESSION['status'] = "Sign Up Failed!! Email already taken, use another email.";
    header("location:admin-sign-up.php?status=fail");
  }

 ?>
