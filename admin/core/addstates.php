<?php

include('../config.php')?>

<?php

//intialize variables
$failed = "Error in updating ";
$name = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

$name = test_input($_POST['name']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//sql statement to edit user
$sql = "INSERT INTO states(name) VALUES('$name') ";
if ($conn->query($sql) == TRUE) {
  header("location:../manage_states.php?message=successful&id" .$name);
} else{
  echo $failed .$conn->error;
}



 ?>
