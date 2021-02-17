<title>Online Crime Reporting System | Manage Registered Userss</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>
<?php include('core/translate.php'); ?>
<div class="content_admin" >
  <span style="text-align:center;color:white;"><h1>Registered Users</h1></span>
          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email Address</th>
                <th>Actions</th>
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
               $page_sql = "SELECT COUNT(*) FROM users";
               $result = $conn->query($page_sql);
               $total_rows = mysqli_fetch_array($result)[0];
               $total_pages = ceil($total_rows/$rec_per_page);
              $deletemsg = $updatemsg = "";

              if(isset($_GET["message"])){
                if (($_GET["message"]) == "delete") {
                  echo "User has been Succesfully removed";
                }
                if (($_GET["message"]) == "update") {
                  $updatemsg = "User Record Updated Successfully";
                }
              }

              $sql = "SELECT * FROM users ORDER BY FirstName LIMIT $offset, $rec_per_page";
              $result= $conn->query($sql); //rs.open sql,con

              if($result->num_rows > 0){
                //outputing data
                while ($row= $result->fetch_assoc())
                { ?><!--open of while -->
            <tr>
              <td><?php echo $row['UserID']; ?></td>
              <td><?php echo $row['FirstName']; ?></td>
              <td><?php echo $row['MiddleName']; ?></td>
              <td><?php echo $row['LastName']; ?></td>
              <td><?php echo $row['UserName']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td class="center">
              <a class="btn btn-info" href="edit_user.php?id=<?php echo $row['UserID']; ?>">
                  <i class="halflings-icon white edit">Edit</i>
                </a>
                <a class="btn btn-danger" onclick="return confirmDel()" href="core/del_user.php?id=<?php echo $row['UserID'];?>">
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
          <tr>
            <td colspan="7"><center><span class="error"><p><?php echo $deletemsg; ?></p></span></center>
            <center><span class="success"><p><?php echo $updatemsg; ?></p></span></center></td>
          </tr>
            </tbody>
          </table>
          <a href="?pageno=1" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;margin-right:1%;" >First</a>
          <a href="?pageno=<?php echo $total_pages; ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:left;">Last</a>



          <!---<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>-->
          <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;margin-left:1%;">Next</a>

          <!---<?php if($pageno <= 1){ echo 'disabled'; } ?>-->
          <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="btn btn-info" style="text-decoration:none;color:white;background:red;float:right;">Prev</a>


        </div>
