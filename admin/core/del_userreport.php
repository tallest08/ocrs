<?php
include("../config.php");

//intialize variables
//$deleted = "";

$id = $_GET['id'];

//sql statement to delete user
$sql = "DELETE FROM incident WHERE ID ='$id'";

if ($conn->query($sql) === TRUE){
//  $deleted = "Deleted Succesfully";
  header("location: new_userreport.php?message=delete");
} else{
  $deleted = "Error in deletion";
}


 ?>
