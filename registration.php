<title>Online Crime Reporting System | RSegistration Page</title>
  <body>
<?php include('framework/header.php');
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 ?>
<?php include('framework/navbar/mainnavbar.php'); ?>

<?php include('core/translate.php'); ?>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="contentArea">
  <form class="reg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <?php include('core/reg.php'); ?>

    <table border="0" cellspacing="1" cellpadding="1" class="tableb">
      <tr>
        <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;margin-bottom:10px;" >Registation Form</p></td>
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
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $usernameErr;?></span></td>
      </tr>
      <tr>
        <td><p>Password:</p></td>
        <td>
          <input type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $passwordErr;?></span></td>
      </tr>
      <tr>
        <td><p>Confirm Password:</p></td>
        <td>
          <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $cpassword; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $cpasswordErr;?></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span class="success"><?php echo $success;?><?php echo $failed;?></span></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="Login" value="Register" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 0%;background-color:#797878;">
          <input type="reset" name="reset" value="Clear" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 6%;background-color:#797878;" >
        </td>
      </tr>

    </table>
  </form>
</div>
<?php include('framework/footer.php'); ?>
