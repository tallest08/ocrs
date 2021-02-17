<?php
//ajax for dropdown state and local Government
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "ocrs");
$state = $_GET["state"];

if ($state != "") {

      $lga_req = mysqli_query($conn,"select * from lga where StateID = $state");
      echo "<select>";
      while ($row = mysqli_fetch_array($lga_req)) {
        echo "<option>"; echo $row["Name"]; echo "</option>";
      }
      echo "</select>";

}
 ?>
