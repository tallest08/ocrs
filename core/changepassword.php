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

    // Check input errors before updating the database
    if(empty($npasswordErr) && empty($cpasswordErr)){
        // Prepare an update statement
        $sql = "UPDATE users SET Password = ? WHERE UserID = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($npassword, PASSWORD_DEFAULT);
            $param_id = $_SESSION["UserID"];

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>
