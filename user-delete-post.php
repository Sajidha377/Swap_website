<?php

//start the session
session_start();

//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");

  $id1 = $_GET['b'];

  //building a dynamic SQL command
  $sql = "DELETE FROM product_admin WHERE product_id='$id1';" and $sql .= "DELETE FROM product WHERE product_id='$id1'";
  

  //execute the sql command
  $x = $mysqli->multi_query($sql);

  if($x > 0){

    if($old_picture_name != "default.jpg"){
      unlink("images/large/$old_picture_name");
      unlink("images/thumb/$old_picture_name");
    }
  

    // echo "Deleted Successfully!!";
    $_SESSION['status'] = "Product deleted successfully!!";
    header("location:user-account.php?status=pass");


  }
  else{
    // echo "Failed!!";
    $_SESSION['status'] = "Failed to delete product";
    header("location:user-account.php?status=fail");
  }

 ?>
