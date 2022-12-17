<?php
require("validate-admin.php");

//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");$admin_id = $_SESSION['admin_id'];

  $admin_id = $_SESSION['admin_id'];

  $product_id = $_REQUEST['product_id'];
  $confirmation = $_REQUEST['confirmation'];

  //building a dynamic SQL command
  $sql  = "update product set ";
  $sql .= "confirmation='$confirmation' where product_id='$product_id'";

  $sql1 = "insert into product_admin (product_id,admin_id) values(";
  $sql1 .= "'$product_id',";
  $sql1 .= "'$admin_id')";

  // echo $sql;

  //execute the sql command
  $x = $mysqli->multi_query($sql);

  //execute the sql command
  $y = $mysqli->multi_query($sql1);

  if($x>0){

      // echo "record successfully updated";
    $_SESSION['status'] = "Post confirmed!!";
    header("location:confirm-post.php?status=pass");
  }
  else{
    // echo "updating record failed";
    $_SESSION['status'] = "Confirming Post failed!!";
    header("location:confirm-post.php?status=pass");
  }
