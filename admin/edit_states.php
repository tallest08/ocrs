<?php
include("framework/header.php");
include("framework/navbar/navbar.php");
include('core/translate.php');

//intialize variables
$nameErr = "";
$success = "";
$failed = ""; //intialize variable
$deleted = "";

$id = $_GET['id'];

//sql statement to edit user
$user_query ="SELECT * FROM states WHERE ID = '$id'";
$result= $conn->query($user_query);
if($result->num_rows > 0){
  if ($row= $result->fetch_assoc()) {
    $name = $row['Name'];


  }
}



 ?>



<form class="reg" action="core/states.php" method="post">


  <table border="0" cellspacing="1" cellpadding="1" class="table_add">
    <tr>
      <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;margin-bottom:10px;" >Edit State</p></td>
    </tr>
  <tr>
    <td><p>State Name:</p></td>
    <td>
      <input type="text" name="name"  placeholder="Enter State Name" value="<?php echo $name;?>">
      <input type="hidden" name="id"  placeholder="Enter State Name" value="<?php echo $id;?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td><span class="error">* <?php echo $nameErr;?></span></td>
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
