
    <div class="navbar" id="myTopnav">
        <a href="index.php" class="active">Home</a>\
        <a href="report_page.php">Report Page</a>
        <a href="crimestatistics.php">Crime Statistics</a>
        <a href="login.php">Login</a>
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
