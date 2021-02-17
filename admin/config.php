<?php
//initializing valriables
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "ocrs";
$conn_error = "Connection Failed";

//creating connection
$conn = new mysqli($servername, $user, $password, $dbname);
//checking connection
if($conn->connect_error){
  die($conn_error."".$conn->connect_error);
}

?>
