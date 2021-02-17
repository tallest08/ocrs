<title>Online Crime Reporting System | Change Password</title>
  <body>
<?php include('framework/header.php');
if(isset($_SESSION["loggedin"]) != true){
  header("location: login.php");
  exit;
}?>
<?php
  $navbar = include('framework/navbar/unavbar.php');
  echo $navbar;
?>
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: login.php");
  exit;
}
?>
<?php include('core/translate.php'); ?>
<div class="contentArea">
  <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <?php include("core/changepassword.php") ?>

    <table border="0" cellspacing="1" cellpadding="1" class="tableb">
      <tr>
        <td><p>New Password:</p></td>
        <td>
          <input type="password" name="npassword" placeholder="Enter New Password">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <span class="error"><?php echo $npasswordErr; ?></span>
        </td>
      </tr>
      <tr>
        <td><p>Confirm New Password:</p></td>
        <td>
          <input type="password" name="cpassword" placeholder="Confirm New Password">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <span class="error"><?php echo $cpasswordErr; ?></span>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="changepassword" value="Submit" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 0%;background-color:#797878;">
          <input type="reset" name="reset" value="Clear" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 6%;background-color:#797878;" >
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include('framework/footer.php'); ?>
