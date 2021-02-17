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
$securityagent = val($_POST['securityagent']);
$progressnote = val($_POST['progressnote']);
$reportedby = val($_POST['reportedby']);
$status = val($_POST['status']);



function val($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//sql statement to edit user
//$sql = "UPDATE users SET name = '$name' WHERE lga. id = '$id'";
$sql ="UPDATE incident SET ID='$id',CrimeTypeID='$crimetype',StateID='$states',LGA='$lga',LocDescription='$lDescription',Report='$incident',SecurityAgent='$securityagent',ProgressNote='$progressnote',ReportedBy='$reportedby',Status='$status' WHERE ID ='$id'";
if ($conn->query($sql) == TRUE) {
  header("location:../new_userreport.php?message=successful&id" .$id);
} else{
  echo "Error in updating ".$conn->error;
}



 ?>
