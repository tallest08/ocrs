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
$error = "";

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
        $sql = "SELECT id, username, firstname, password FROM administrator WHERE username = '$username' and password ='$password'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $fname = $row['firstname'];


        /*$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];*/

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
           $_SESSION["loggedin"] = true;
           $_SESSION["id"] = $id;
           $_SESSION["username"] = $username;
           $_SESSION["firstname"] = $fname;

           header("location: dashboard.php");
        }else {
           $error = "Username or Password Incorrect";
        }
     }

        // Close statement
      mysqli_close($conn);
    }

    // Close connection


?>
