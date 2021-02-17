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
$admin_query ="SELECT * FROM administrator WHERE ID = '$id'";
$result= $conn->query($admin_query);
if($result->num_rows > 0){
  if ($row= $result->fetch_assoc()) {
    $fname = $row['FirstName'];
    //$mname = $row['middlename'];
    $lname = $row['LastName'];
    //$gender = $row['gender'];
    //$address = $row['address'];
    //$mobileno = $row['phone'];
    $username = $row['UserName'];
    $password = $row['Password'];
    //$email = $row['email'];
    $securityagent =$row['SecurityOrg'];

  }
}



 ?>


<?php include('core/translate.php'); ?>
<form class="reg" action="core/admin.php" method="post">


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
    <td><p>Last Name:</p></td>
    <td>
      <input type="text" name="lname"  placeholder="Enter Last Name" value="<?php echo $lname; ?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $lnameErr;?></span></td>
  </tr>
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
