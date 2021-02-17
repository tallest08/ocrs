<title>Online Crime Reporting System | Manage Crime Type</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');
/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>

<?php include('core/translate.php'); ?>
<div class="content_admin">
  <span style="text-align:center;color:white;"><h1>Manage Local Government</h1></span>

          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>State ID</th>
                <th>State</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
              include("config.php");
              if(isset($_GET['pageno'])){
                $pageno = $_GET['pageno'];
              } else {
                $pageno = 1;
              }
               $rec_per_page = 5;
               $offset = ($pageno - 1) * $rec_per_page;
               $page_sql = "SELECT COUNT(*) FROM lga";
               $result = $conn->query($page_sql);
               $total_rows = mysqli_fetch_array($result)[0];
               $total_pages = ceil($total_rows/$rec_per_page);



              $sql = "SELECT * FROM lga LIMIT $offset,$rec_per_page ";
              $result_data= $conn->query($sql); //rs.open sql,con

              if($result_data->num_rows > 0){
                //outputing data
                while ($row= $result_data->fetch_assoc())
                { ?><!--open of while -->
            <tr>
              <td><?php echo $row['ID']; ?></td>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['StateID']; ?></td>
              <?php
                $id = $row['StateID'];
                $sql1 = "SELECT * FROM states WHERE ID = $id ";
                $result1 = $conn->query($sql1);
                  if ($row1= $result1->fetch_assoc()) { ?>
                    <td><?php echo $row1['Name']; ?></td>
                <?php  }?>


              <td class="center">
            <a class="btn btn-info" href="edit_lga.php?id=<?php echo $row['ID']; ?>">
                  <i class="halflings-icon white edit">Edit</i>
                </a>
                <a class="btn btn-danger" onclick="return confirmDel()" href="core/del_lga.php?id=<?php echo $row['ID'];?>">
                  <i class="halflings-icon white trash">Delete</i>
                </a>
              </td>
            </tr>
            <?php
               } //close of while
            ?>



            <?php
          } ?>
          <?php mysqli_close($conn); ?>


            </tbody>
          </table>


          <a href="?pageno=1" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;margin-right:1%;">First</a>
          <a href="?pageno=<?php echo $total_pages; ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;">Last</a>



          <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>
          <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;margin-left:1%;">Next</a>

          <?php if($pageno <= 1){ echo 'disabled'; } ?>
          <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;">Prev</a>



        </div>
