<body>

<?php

 include('framework/header.php');
include('framework/navbar/navbar.php')?>

<?php

//intialize variables
$nameErr = "";
$success = "";
$failed = ""; //intialize variable
$deleted = "";

$id = $_GET['id'] ;

//sql statement to edit user
$crimetype_query ="SELECT * FROM crimetype WHERE id = '$id'";
$result= $conn->query($crimetype_query);
if($result->num_rows > 0){
  if ($row= $result->fetch_assoc()) {
    $name = $row['name'];


  }

}
else {
  echo "Nothing to display";
}



 ?>


<?php include('core/translate.php'); ?>
<form class="reg" action="core/crimetype.php" method="post">


  <table border="0" cellspacing="1" cellpadding="1" class="tableb">
    <tr>
      <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;margin-bottom:10px;" >Update Crime Type</p></td>
    </tr>
  <tr>
    <td><p>Crime Type:</p></td>
    <td>
      <input type="text" name="name"  placeholder="Enter Crime Type" value="<?php echo $name;?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <input type="hidden" name="id"  placeholder="Enter Crime Type" value="<?php echo $id;?>">
    </td>
  </tr>

    <tr>
      <td></td>
      <td>
        <input type="submit" name="Update" value="Update" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 0%;background-color:#797878;">
        <input type="reset" name="reset" value="Clear" style="height:30px;width:30%;padding:5px 10px;font-size:16px;border:1px solid #797878;float:left;margin:2% 6%;background-color:#797878;" >
      </td>
    </tr>

  </table>
</form>



</body>
<?php include('framework/footer.php'); ?>
