<?php
  //database connection
  $server   = $_ENV["server"];
  $username = $_ENV["username"];
  $password = $_ENV["password"];
  $db_name  = $_ENV["db_name"];

  $mysqli = new mysqli($server,$username,$password,$db_name);

  if($mysqli->connect_error){
    echo $mysqli->errorno . "<br />";
    echo $mysqli->error . "<br />";
    die("connection failed");
  }
   //echo "connection successful";

 ?>

