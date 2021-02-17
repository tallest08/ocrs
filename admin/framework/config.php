<?php
$conn_error = "We are experiencing a downtime at the moment check back later";
$conn = mysqli_connect("localhost", "root", "") or die($conn_error);
$db = mysqli_select_db($conn,"ocrs") or die($conn_error);
?>
