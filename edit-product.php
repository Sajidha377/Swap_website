<?php

  //start the session
  session_start();

  //connecting the database
  require("db_connection.php");

  //connecting the code library
  require("code_lib.inc.php");

  //copying the form field values into variables
  $product_id         = $_REQUEST['product_id'];
  $product_name       = $_REQUEST['product_name'];
  $product_condition  = $_REQUEST['product_condition'];
  $description        = $_REQUEST['description'];
  $category           = $_REQUEST['category'];
  $confirmation       = $_REQUEST['confirmation'];

  //lets build the dynamic sql commands
  $sql = "update product set ";
  $sql .= "product_name='$product_name',";
  $sql .= "product_condition='$product_condition',";
  $sql .= "description='$description',";
  $sql .= "category='$category',";
  $sql .= "confirmation='$confirmation' where product_id='$product_id'";

  echo $sql;

  //execute the sql command
  $x = $mysqli->query($sql);

  if ($x > 0) {
    // echo "Update successful";

    //uploading of files
    if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){

      $old_picture_name = getProductPicture($product_id);

      $filename = $_FILES['picture']['tmp_name'];
      $destination;

      if($old_picture_name == "default.jpg"){

        //generating a new file name for old default names
        $destination = $product_id . "_" . rand().rand().rand().".jpg";

      }
      else{

        $destination = $old_picture_name;

      }

      move_uploaded_file($filename,"images/large/".$destination);
      copy("images/large/".$destination, "images/thumb/".$destination);
      resizeThumbPicture("images/large/",$destination);

      //SQL command
      $sql2 = "update product set picture='$destination' where product_id=$product_id";

      //executing th SQL commands
      $mysqli->query($sql2);

    }

    $_SESSION['status'] = "Update successful!! Product will be posted after verification!!";
    header("location:user-account.php?status=pass");

  }

  else{
    // echo "Update failed";
    $_SESSION['status'] = "Failed to update post!!";
    header("location:user-account.php?status=pass");

  }
