<?php

//start the session
session_start();

//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");

  $id = $_GET['a'];

  //building a dynamic SQL command
  $sql = "delete from product where product_id='$id'";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){

    if($old_picture_name != "default.jpg"){
      unlink("images/large/$old_picture_name");
      unlink("images/thumb/$old_picture_name");
    }
  

    // echo "Deleted Successfully!!";
    $_SESSION['status'] = "Product deleted successfully!!";
    header("location:confirm-post.php?status=pass");


  }
  else{
    // echo "Failed!!";
    $_SESSION['status'] = "Failed to delete product";
    header("location:confirm-post.php?status=fail");
  }

 ?>
