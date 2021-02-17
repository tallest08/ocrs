<?php

include('../config.php')?>

<?php

//intialize variables
$id = val($_POST['id']);
$name = val($_POST['name']);

function val($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//sql statement to edit user
$sql = "UPDATE crimetype SET name = '$name' WHERE crimetype. id = '$id'";
if ($conn->query($sql) == TRUE) {
  header("location:../manage_crimetype.php?message=successful&id" .$id);
} else{
  echo "Error in updating ".$conn->error;
}



 ?>
