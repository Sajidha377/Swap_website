<?php

  session_start();

  //validating the user
  if($_SESSION['admin_id'] == ''){
    //redirect to invalid login
    header("location:admin-login.php") ;
  }

 ?>
