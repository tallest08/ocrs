<?php
include("../config.php");

//intialize variables
//$deleted = "";

$id = $_GET['id'];

//sql statement to delete user
$sql = "DELETE FROM lga WHERE id ='$id'";

if ($conn->query($sql) === TRUE){
//  $deleted = "Deleted Succesfully";
  header("location: manage_lga.php?message=delete");
} else{
  $deleted = "Error in deletion";
}


 ?>
