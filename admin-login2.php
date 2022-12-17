<?php
  //start the session
  session_start();

  //connect to database server
  require("db_connection.php");

  //lets capture values to variables
  $admin_id     = $_REQUEST['admin_id'];
  $admin_access_code = $_REQUEST['admin_access_code'];

  //lets build the dynamic sql command
  $sql = "SELECT * from admin where admin_id='$admin_id'";

  //execute the sql command
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //echo "user id found in db";
    //since the user id found lets check the passwords too
    $row = mysqli_fetch_assoc($rs);


    if($row['admin_access_code'] == crypt($admin_access_code,$row['admin_access_code'])){
      $_SESSION['admin_id'] = $admin_id;
      header("location:dashboard.php?status=pass");
    }
    else{
      $_SESSION['status'] = "Authorization Failed!!";
      header("location:admin-login.php?status=fail");
    }

  }
  else{
    $_SESSION['status'] = "Authorization Failed!!";
    header("location:admin-login.php?status=fail");
  }
