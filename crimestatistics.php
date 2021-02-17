
<title>Online Crime Reporting System | Report Crime</title>
  <body>
<?php include('framework/header.php');
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  $navbar = include('framework/navbar/unavbar.php');
}
else {
  $navbar = include('framework/navbar/mainnavbar.php');
}


?>

<?php
  echo $navbar;
?>
<?php include('core/translate.php'); ?>
<form class="charts" style="margin:auto;margin-left:30%;" action="crimestatistics.php" method="post">
  <select class="selectchart" name="charts">
    <option id= "National" value="N" name="National">National Statistics of Crime</option>
    <option id= "States" value="S" name="States">Crime Statiscs per State</option>
  </select>
  <input type="submit" name="Submit" value="Submit">
</form>
<?php
$national = $states ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if($_POST['charts']=='N'){
  include('piechart.php');

}elseif ($_POST['charts']=='S') {
   include('barchart.php');

}
 }?>

<br>
<br>

<br>
<br>
  </body>
</html>
