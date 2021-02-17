<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


// Define variables and initialize with empty values
$npassword = $cpassword = "";
$npasswordErr = $cpasswordErr = "";
$username= "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    if(empty(test_input($_POST["npassword"]))){
        $npasswordErr = "Please enter the new password";
    } elseif(strlen(test_input($_POST["npassword"])) < 6){
        $npasswordErr = "Password must have atleast 6 characters";
    } else{
        $npassword = test_input($_POST["npassword"]);
    }

    // Validate confirm password
    if(empty(test_input($_POST["cpassword"]))){
        $cpasswordErr = "Please confirm the password";
    } else{
        $cpassword = test_input($_POST["cpassword"]);
        if(empty($npasswordErr) && ($npassword != $cpassword)){
            $cpasswordErr = "Password did not match";
        }
    }
    $username= test_input($_POST['username']);

    // Check input errors before updating the database
    if(empty($npasswordErr) && empty($cpasswordErr)){
        // Prepare an update statement
        $sql = "UPDATE administrator SET password = '$npassword' WHERE username = '$username";
        $query = $conn->query($sql);
        if($query == TRUE ){
                session_destroy();
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later";
            }
        }

    }

    // Close connection
    mysqli_close($conn);
?>
