<?php
  //database connection
  $DB_HOST = $_ENV["DB_HOST"];
  $DB_USER = $_ENV["DB_USER"];
  $DB_PASSWORD = $_ENV["DB_PASSWORD"];
  $DB_NAME = $_ENV["DB_NAME"];
  $DB_PORT = $_ENV["DB_PORT"];

  $mysqli = new mysqli("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");

  if($mysqli->connect_error){
    echo $mysqli->errorno . "<br />";
    echo $mysqli->error . "<br />";
    die("connection failed");
  }
   //echo "connection successful";
?>
