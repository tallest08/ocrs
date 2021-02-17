<link href="../../../css/master.css" rel="stylesheet" type="text/css" />
<div class="adminbar" id="myTopnav1">
	<a href="index.php" class="active1">Home</a>
	<div class="dropdown">
		<button class="dropbtn1">User Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="new_userreport.php">New</a>
      <a href="pending_userreport.php">In Progress</a>
      <a href="completed_userreport.php">Completed</a>
      </div>
      </div>
      <div class="dropdown">
		<button class="dropbtn1">Anonymous Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="new_reportdata.php">New</a>
      <a href="pending_reportdata.php">In Progress</a>
      <a href="completed_reportdata.php">Completed</a>
      </div>
      </div>
       <div class="dropdown">
		<button class="dropbtn1">Manage User/Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manage_admin.php">Manage Administrators</a>
      <a href="manage_users.php">manage Users</a>
      </div>
      </div>
          <a href="manage_crimetype.php" >Manage Crime Type</a>
             <div class="dropdown">
    <button class="dropbtn1">Manage Location
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manage_states.php">States</a>
      <a href="manage_lga.php">Local Govenments</a>
      </div>
      </div>
              <div class="dropdown">
    <button class="dropbtn1">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="changepassword.php">Change password</a>
      <a href="logout.php">Logout</a>
      </div>
      </div>

       <a href="javascript:void(0);" class="icon1" onclick="myFunction()">&#9776;
        </a>
      </div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav1");
  if (x.className === "adminbar") {
    x.className += " responsive";
  } else {
    x.className = "adminbar";
  }
}
</script>

<?php
if(isset($_SESSION["loggedin"]) != true){
  header("location: index.php");
  exit;
}
 ?>
