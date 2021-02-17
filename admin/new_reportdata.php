<title>Online Crime Reporting System | Report Data</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>
<?php include('core/translate.php'); ?>
<div class="content_admin">
    <h1 class="tophead">New Anonymous Report</h1>
          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Crime Type</th>
                <th>State</th>
                <th>Local Government</th>
                <th>Location Description</th>
                <th>Incident</th>
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
               $page_sql = "SELECT COUNT(*) FROM incident";
               $result = $conn->query($page_sql);
               $total_rows = mysqli_fetch_array($result)[0];
               $total_pages = ceil($total_rows/$rec_per_page);

              $sql = "SELECT * FROM incident WHERE Status='Unassigned' and ReportedBy='Anonymous' ORDER BY id LIMIT $offset,$rec_per_page";
              $result= $conn->query($sql); //rs.open sql,con

              if($result->num_rows > 0){
                //outputing data
                while ($row= $result->fetch_assoc())
                { ?><!--open of while -->
            <tr>
              <td><?php echo $row['ID']; ?></td>
              <?php
                $cid = $row['CrimeTypeID'];
                $sql1 = "SELECT * FROM crime WHERE ID = $cid";
                $result1 = $conn->query($sql1);
                  if ($row1= $result1->fetch_assoc()) { ?>
                    <td><?php echo $row1['CrimeType']; ?></td>
                <?php  }?>

              <?php
                $id = $row['StateID'];
                $sql1 = "SELECT * FROM states WHERE ID = $id";
                $result1 = $conn->query($sql1);
                  if ($row1= $result1->fetch_assoc()) { ?>
                    <td><?php echo $row1['Name']; ?></td>
                <?php  }?>
              <td><?php echo $row['LGA']; ?></td>
              <td><?php echo $row['LocDescription']; ?></td>
              <td><?php echo $row['Report']; ?></td>

              <td class="center">
            <a class="btn btn-info" href="edit_anonreport.php?id=<?php echo $row['ID']; ?>">
                  <i class="halflings-icon white edit">Edit</i>
                </a>
                <a class="btn btn-danger" onclick="return confirmDel()" href="core/del_crimetype.php?id=<?php echo $row['ID'];?>">
                  <i class="halflings-icon white trash">Delete</i>
                </a>
              </td>
            </tr>
            <?php
               } //close of while
            ?>
            <?php
          } else{ ?>
            <tr>
              <td colspan="7"><?php echo "no results to display"; ?></td>

              </tr>
              <?php
          }
          ?>
            </tbody>
          </table>
          <a href="?pageno=1" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;margin-right:1%;">First</a>
          <a href="?pageno=<?php echo $total_pages; ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;">Last</a>



          <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>
          <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;margin-left:1%;">Next</a>

          <?php if($pageno <= 1){ echo 'disabled'; } ?>
          <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;">Prev</a>


        </div>
