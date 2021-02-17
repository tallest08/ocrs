
    <div class="navbar" id="myTopnav">
        <a href="index.php" class="active">Home</a>
          <a href="report_crime.php">Report Crime</a>
          <a href="reported_crime.php">Reported Crime</a>
          <a href="crimestatistics.php">Crime Statistics</a>
        <a href="changepassword.php">Change Password</a>
        <a href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          v
        </a>
      </div>



      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "navbar") {
          x.className += " responsive";
        } else {
          x.className = "navbar";
        }
      }
      </script>
