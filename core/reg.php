<?php

// Check if the user is already logged in, if yes then redirect him to welcome page
/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: report_crime.php");
  exit;
}*/

//function for trim,stripslashes and htmlspecialchars of data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Define variables and initialize with empty values
$fname = $mname = $lname = $gender = $address = $mobileno = $username = $password = $cpassword = $username = $email = "";
$fnameErr =$mnameErr = $lnameErr= $genderErr = $addressErr = $mobilenoErr = $usernameErr = $passwordErr = $cpasswordErr = $usernameErr2 = $emailErr = $emailErr2 = "";
$success = "";
$failed = ""; //intialize variables

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //validate first name
  if(empty(test_input($_POST['fname']))){
    $fnameErr = "Please Enter First Name";
  } else{
    $fname = test_input($_POST['fname']);
    //checking ig it contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  // validate middle name
  if(empty(test_input($_POST['mname']))){
    $mnameErr = "Please Enter Middle Name";
  } else{
    $mname = test_input($_POST['mname']);
    //checking ig it contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
    }
  }

  // validate last name
  if(empty(test_input($_POST['lname']))){
    $lnameErr = "Please Enter Last Name";
  } else{
    $lname = test_input($_POST['lname']);
    //checking ig it contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  //validate gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //validate mobileno
  if (empty(test_input($_POST["mobileNo"]))) {
    $mobilenoErr = "Phone Number is required";
  } else {
    $mobileno = test_input($_POST["mobileNo"]);
    if (!preg_match("/^[0-9+ ]*$/",$mobileno)) {
      $mobilenoErr = "Only Numbers are allowed";
    }
  }
//validate address
  if (empty(test_input($_POST["address"]))) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

//validate email address
  if (empty(test_input($_POST["email"]))) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }



    // Validate username
    if(empty(test_input($_POST["username"]))){
        $usernameErr = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT UserID FROM users WHERE UserName = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = test_input($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usernameErr = "This username is already taken";
                } else{
                    $username = test_input($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(test_input($_POST["password"]))){
        $passwordErr = "Please enter a password";
    } elseif(strlen(test_input($_POST["password"])) < 6){
        $passwordErr = "Password must have atleast 6 characters";
    } else{
        $password = test_input($_POST["password"]);
    }

    // Validate confirm password
    if(empty(test_input($_POST["cpassword"]))){
        $cpasswordErr = "Please confirm password.";
    } else{
        $cpassword = test_input($_POST["cpassword"]);
        if(empty($passwordErr) && ($password != $cpassword)){
            $cpasswordErr = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($fnameErr) && empty($mnameErr) && empty($lnameErr) && empty($genderErr) && empty($mobilenoErr) && empty($addressErr) &&empty($emailErr) && empty($usernameErr) && empty($passwordErr)){

        // Prepare an insert statement
        $sql = "INSERT INTO users(FirstName,MiddleName,LastName,Gender,Phone,Address,Email,UserName,Password) VALUES (?,?,?,?,?,?,?,?,?)";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_fname, $param_mname, $param_lname, $param_gender, $param_phone, $param_address,  $param_email, $param_username, $param_password);

            // Set parameters
            $param_fname = $fname;
            $param_mname = $mname;
            $param_lname = $lname;
            $param_gender = $gender;
            $param_phone = $mobileno;
            $param_address = $address;
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
              $success = "Registration successful";
                // Redirect to login page
                header("location: login.php");
            } else{
              $failed = "Something went wrong. Please try again later";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>
