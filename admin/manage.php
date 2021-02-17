

  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/master.css">
   <link href="../css/twoColFixLt.css" rel="stylesheet" type="text/css">


   <div id="sidenav">
    <a href="#report" class="link active">Reports</a>
     <a href="#userreport" class="link">User Reports</a>
      <a href="#" class="link">Anonymous Reports</a>
      <a href="#" class="link">Manage Users</a>
      <a href="#" class="link">Manage Administrators</a>
      <a href="#" class="link">Manage Crime Type</a>
      <a href="#" class="link">Manage States</a>
      <a href="#" class="link">Manage Local Government</a>
</div>



<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("sidenav");
var links = header.getElementsByClassName("link");
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
