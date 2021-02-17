<?php

include('../config.php')?>

<?php

//intialize variables
$id = val($_POST['id']);
$fname = val($_POST['fname']);
$mname = val($_POST['mname']);
$lname = val($_POST['lname']);
$gender = val($_POST['gender']);
$address = val($_POST['address']);
$mobileno = val($_POST['mobileNo']);
$username = val($_POST['username']);
$email = val($_POST['email']);



function val($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//sql statement to edit user
//$sql = "UPDATE users SET name = '$name' WHERE lga. id = '$id'";
$sql = "UPDATE users SET firstname = '$fname' ,middlename = '$mname' ,lastname ='$lname' ,gender= '$gender',phone = '$mobileno', address= '$address' ,email = '$email', username = '$username' WHERE user_id ='$id'";
if ($conn->query($sql) == TRUE) {
  header("location:../manage_users.php?message=successful&id" .$id);
} else{
  echo "Error in updating ".$conn->error;
}



 ?>
