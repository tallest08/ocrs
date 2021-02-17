<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  //validate first name
  if(empty(test_input($_POST['name']))){
    $nameErr = "Please State Name";
  } else{
    $name = test_input($_POST['name']);
    //checking ig it contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


    // Check input errors before inserting in database
    if(empty($nameErr)){

$sql = "UPDATE states SET name = $name  WHERE id ='$id'";

if ($conn->query($sql) === TRUE){
  $deleted = "Deleted Succesfully";
  header("location: manage_users.php");
} else{
  $deleted = "Error in deletion";
}

?>
