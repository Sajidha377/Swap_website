<?php
  //database connection
  $server   = $_ENV["server"];
  $username = $_ENV["username"];
  $password = $_ENV["password"];
  $db_name  = $_ENV["db_name"];
  $db_port = $_ENV["db_port"];

  $mysqli = new mysqli($server,$username,$password,$db_name,$db_port);

  if($mysqli->connect_error){
    echo $mysqli->errorno . "<br />";
    echo $mysqli->error . "<br />";
    die("connection failed");
  }
   //echo "connection successful";

 ?>

