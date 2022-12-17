<?php
  //start the session
  session_start();

  //connect to database server
  require("db_connection.php");

  //lets capture values to variables
  $user_id     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  //lets build the dynamic sql command
  $sql = "SELECT * from USER where user_id='$user_id'";

  //execute the sql command
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //echo "user id found in db";
    //since the user id found lets check the passwords too
    $row = mysqli_fetch_assoc($rs);


    if($row['access_code'] == crypt($access_code,$row['access_code'])){
      $_SESSION['user_id'] = $user_id;
      header("location:index.php?status=pass");
    }
    else{
      $_SESSION['status'] = "Authorization Failed!!";
      header("location:login.php?status=fail");
    }

  }
  else{
    $_SESSION['status'] = "Authorization Failed!!";
    header("location:login.php?status=fail");
  }

 ?>