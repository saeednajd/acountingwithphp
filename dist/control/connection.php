<?php

// $con = connectToDatabase(); (this way you can conect to database)
function connectToDatabase() {
    $con= new mysqli("localhost","root","","accounting");
    $con->Set_charset("utf8");
    
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  return $con;
}

?>