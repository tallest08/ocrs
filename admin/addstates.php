<title>Online Crime Reporting System | Manage Crime Type</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');
/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>

<?php include('core/translate.php'); ?>
<table class="table_add">
  <form class="" action="core/addstates.php" method="post">
    <thead>
      <tr>
        <th>Add New</th>
      </tr>

    </thead>
  <tr>
    <td>State Name:<td>
  </tr>
  <tr>
      <td><input type="text" name="name" value=""></tr>
    <tr>

    <tr>

    <td class="center">
  <button class="btn btn-info" type="submit">
        <i class="halflings-icon white edit">Add</i>
      </button>


    </td>
  </tr>
  </form>
</table>
