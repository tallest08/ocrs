<?php
include("framework/header.php");
include("framework/navbar/navbar.php");

//intialize variables
$fnameErr =$mnameErr = $lnameErr= $genderErr = $addressErr = $mobilenoErr = $usernameErr = $passwordErr = $cpasswordErr = $usernameErr2 = $emailErr = $emailErr2 = "";
$success = "";
$failed = ""; //intialize variable
$deleted = "";

$id = $_GET['id'];

//sql statement to edit user
$user_query ="SELECT * FROM users WHERE UserID = '$id'";
$result= $conn->query($user_query);
if($result->num_rows > 0){
  if ($row= $result->fetch_assoc()) {
    $fname = $row['FirstName'];
    $mname = $row['MiddleName'];
    $lname = $row['LastName'];
    $gender = $row['Gender'];
    $address = $row['Address'];
    $mobileno = $row['Phone'];
    $username = $row['UserName'];
    $password = $row['Password'];
    $email = $row['Email'];

  }
}



 ?>



<form class="reg" action="core/users.php" method="post">


  <table border="0" cellspacing="1" cellpadding="1" class="table_add">
    <tr>
      <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;margin-bottom:10px;" >Update User</p></td>
    </tr>
  <tr>
    <td><p>First Name:</p></td>
    <td>
      <input type="text" name="fname"  placeholder="Enter First Name" value="<?php echo $fname;?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $fnameErr;?></span></td>
  </tr>
  <tr>
    <td><p>Middle Name:</p></td>
    <td>
      <input type="text" name="mname" placeholder="Enter Middle Name" value="<?php echo $mname; ?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $mnameErr;?></span></td>
  </tr>
  <tr>
    <td><p>Last Name:</p></td>
    <td>
      <input type="text" name="lname"  placeholder="Enter Last Name" value="<?php echo $lname; ?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $lnameErr;?></span></td>
  </tr>
  <tr>
    <td><p>Gender:</p></td>
    <td>
      <label style="float:left;margin-left:2%;color:white;font:Calibri;">Male</label><input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male" style="float:left;margin-left:1%;width:1%;">
      <label style="float:left;margin-left:2%;color:white;font:calbri;">Female</label><input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female"style="float:left;margin-left:1%;width:1%;"  >
      <span class="error">* <?php echo $genderErr;?></span>
    </td>
  </tr>
  <tr>
    <td><p>Phone Number:</p></td>
    <td>
      <input type="text" name="mobileNo" placeholder="Enter Phone Number" value="<?php echo $mobileno; ?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $mobilenoErr;?></span></td>
  </tr>
  <tr>
    <tr>
      <td><p>Address:</P></td>
      <td>
        <textarea name="address" width="90%" ><?php echo $address; ?></textarea>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><span class="error">* <?php echo $addressErr;?></span></td>
    </tr>
    <tr>
      <td><p>Email:</P></td>
      <td>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </td>
    </tr>
    <tr>
      <td></td>
      <td><span class="error">* <?php echo $emailErr;?></span></td>
    </tr>
    <tr>
      <td colspan="2"><hr></td>
    </tr>
    <tr>
      <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:18px;color:rgb(255,255,255);margin-bottom:10px;" >Login Details</p></td>
    </tr>
    <tr>
      <td><p>Username:</p></td>
      <td>
        <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
        <input type="hidden" name="id" placeholder="Enter Username" value="<?php echo $id; ?>">
      </td>
    </tr>
    <tr>
      <td></td>
      <td><span class="error">* <?php echo $usernameErr;?></span></td>
    </tr>
    <tr>
      <td></td>
      <td><span class="success"><?php echo $success;?><?php echo $failed;?></span></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="Login" value="Update" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 0%;background-color:#797878;">
        <input type="reset" name="reset" value="Clear" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 6%;background-color:#797878;" >
      </td>
    </tr>

  </table>
</form>
