<?php

//function for trim,stripslashes and htmlspecialchars of data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username = $password = "";
$usernameErr = $passwordErr = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(test_input($_POST["username"]))){
        $usernameErr = "Please enter username";
    } else{
        $username = test_input($_POST["username"]);
    }

    // Check if password is empty
    if(empty(test_input($_POST["password"]))){
        $passwordErr = "Please enter your password";
    } else{
        $password = test_input($_POST["password"]);
    }

    // Validate credentials
    if(empty($usernameErr) && empty($passwordErr)){
        // Prepare a select statement
        $sql = "SELECT UserID, UserName, Password FROM users WHERE UserName = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["UserID"] = $id;
                            $_SESSION["UserName"] = $username;

                            // Redirect user to welcome page
                            header("location: report_crime.php");
                        } else{
                            // Display an error message if password is not valid
                            $passwordErr = "The password you entered was not valid";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $usernameErr = "No account found with that username";
                }
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
