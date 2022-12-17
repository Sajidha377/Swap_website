<?php

  session_start(); 

  //validating the user
  if($_SESSION['user_id'] == ''){
    //redirect to invalid login
    header("location:login.php") ;
  }

 ?>
