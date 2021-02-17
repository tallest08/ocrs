<?php

include('../config.php')?>
<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
/*  if(empty(test_input($_POST['mname']))){
    $mnameErr = "Please Enter Middle Name";
  } else{
    $mname = test_input($_POST['mname']);
    //checking ig it contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
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

  */

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




    // Validate username
    if(empty(test_input($_POST["username"]))){
        $usernameErr = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM administrator WHERE username = ?";

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

  /*   // Validate password
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
    }*/

    // Check input errors before inserting in database
    if(empty($fnameErr) && empty($lnameErr) && empty($usernameErr) ){

      $sql = "UPDATE administrator SET firstname = $fname,lastname =$lname , username = $username WHERE id ='$id'";

//$sql = "UPDATE administrator SET firstname = $fname ,middlename = $mname ,lastname =$lname ,gender= $gender,phone = $mobileno, address= $address ,email = $email, username = $username WHERE user_id ='$id'";

if ($conn->query($sql) === TRUE){
  $success = "Updated Succesfully";
  header("location: manage_admin.php?message=success");
} else{
  echo "Error in updating ".$conn->error;
}
}
}
?>
