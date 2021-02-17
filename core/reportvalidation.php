<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$crimetypeErr = $statesErr = $lgaErr = $lDescriptionErr = $incidentErr = "";
$crimetype = $states = $lga = $lDescription = $incident = "";
$success = $failed = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['crimetype']) or $_POST['crimetype'] === 'null') {
    $crimetypeErr = "Select Crime Type";
  } else {
    $crimetype = test_input($_POST["crimetype"]);
  }
  if(empty($_POST['states']) or $_POST['states'] === 'null') {
    $statesErr = "Please Select State";
  } else {
  $states = test_input($_POST["states"]);
  }

 if(empty($_POST['lga']) or $_POST['lga'] === 'null') {
  $lgaErr = "Please Select Local Government";
 } else {
   $lga = test_input($_POST["lga"]);
 }

 if(empty($_POST['lDescription']) or $_POST['lDescription'] === 'null') {
  $lDescriptionErr = "Description of Location is Required";
  } else {
  $lDescription = test_input($_POST["lDescription"]);
  }
 if(empty($_POST['incident']) or $_POST['incident'] === 'null') {
   $incidentErr = "Please Incident Description is Required";
 } else {
   $incident = test_input($_POST["incident"]);
 }

 if(empty($crimetypeErr) && empty($statesErr) && empty($lgaErr) && empty($lDescriptionErr) && empty($incidentErr)){
   $report_data = "INSERT into incident(CrimeTypeID,StateID,LGA,LocDescription,Report) VALUES ('$crimetype', '$states', '$lga', '$lDescription', '$incident')";
   if ($conn->query($report_data) === TRUE) {
     $success = "Report Successful";
   } else {
     $failed = "Error ". $report_data. "<br>". $conn->error;
   }
 }

 //check for report data


}



 ?>
