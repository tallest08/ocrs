<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link href="css/master.css" rel="stylesheet" type="text/css">
  </head>
  <body>




<div class="navbar" id="myTopnav">
        <a href="index.php" class="active">Home</a>
          <a href="report_crime.php">Report Crime</a>
          <a href="crimedemographics.php">Crime Demographics</a>
        <a href="changepassword.php">Change Password</a>
        <a href="logout.php">Logout</a>
        <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
      </div>
      </div>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">v
        </a>
      </div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


    </body>
  </html>
