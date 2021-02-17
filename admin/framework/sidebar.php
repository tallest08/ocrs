<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/master.css" rel="stylesheet" type="text/css" />
<link href="../css/twoColLiqLtHdr.css" rel="stylesheet" type="text/css" />
<link href="../css/twoColFixLt.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div class="sidebar">
  <a href="#">Reports</a>
  <div class="dropdown">
    <a href="#">User Reports</a>
      <div class="dropdown_2">
        <a href="#">New</a>
        <a href="#">Pending</a>
        <a href="#">Completed</a>
      </div>
    <a href="#">Anonymous Report</a>
      <div class="dropdown_2">
        <a href="#">New</a>
        <a href="#">Pending</a>
        <a href="#">Completed</a>
      </div>
  </div>
<a href="#">Manage Users</a>
<a href="#">Manage Administrators</a>
<a href="#">Manage states</a>
<a href="#">Manage Local Government</a>
<a href="#">Manage Crime Type</a>


</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>
