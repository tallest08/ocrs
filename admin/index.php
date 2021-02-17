<title>Online Crime Reporting System | Admin Login Page</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/mainnavbar.php');
if(isset($_SESSION["loggedin"]) == TRUE){
  header("location: dashboard.php");
  exit;
}?>
<?php include('core/translate.php'); ?>
<div class="contentArea">
  <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <?php include("core/login.php"); ?>
    <span style="text-align:center;color:white;">
      <h1>Login</h1>
    </span>
    <table border="0" cellspacing="1" cellpadding="1" class="tableb">
      <tr>
        <td><p>Username:</p></td>
        <td>
          <input type="text" name="username" placeholder="Enter Username">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error"><?php echo $usernameErr;?></span></td>
      </tr>
      <tr>
        <td><p>Password:</p></td>
        <td>
          <input type="password" name="password" placeholder="Enter Password">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error"><?php echo $passwordErr;?></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error"><?php echo $error;?></span></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="Login" value="Login" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 0%;background-color:#797878;">
          <input type="reset" name="reset" value="Clear" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 6%;background-color:#797878;" >
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include('../framework/footer.php'); ?>
