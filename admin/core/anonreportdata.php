<?php

include('../config.php')?>

<?php

//intialize variables
$id = val($_POST['id']);
$crimetype = val($_POST['crimetype']);
$states = val($_POST['states']);
$lga = val($_POST['lga']);
$lDescription =  val($_POST['lDescription']);
$incident = val($_POST['incident']);
$progressnote = val($_POST['progressnote']);
$status = val($_POST['status']);



function val($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//sql statement to edit user
//$sql = "UPDATE users SET name = '$name' WHERE lga. id = '$id'";
$sql ="UPDATE reportdata SET id='$id',crimetype_id='$crimetype',state_id='$states',lgaName='$lga',lDescription='$lDescription',incident='$incident',progressNote='$progressnote',status='$status' WHERE id ='$id'";
if ($conn->query($sql) == TRUE) {
  header("location:../new_reportdata.php?message=successful&id" .$id);
} else{
  echo "Error in updating ".$conn->error;
}



 ?>
