<title>Online Crime Reporting System | Manage Crime Type</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/master.css">
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
              $rec_limit = 5;
              $sql = "SELECT count(id) FROM lga";
              $retrieve = $conn->query($sql);
              if(! $retrieve){
                die('Could not retrieve data'. $conn->error($retrieve));
              }
              $row = mysqli_fetch_array($retrieve, MYSQLI_NUM);
              $rec_count = $row[0];
              if(isset($_GET['page'])){
                $page = $_GET['page'] + 1;
                $offset = $rec_limit * $page;
              } else{
                $page = 0;
                $offset = 0;
              }
              $left_rec = $rec_count - ($page * $rec_limit);

              $sql = "SELECT * FROM lga LIMIT $offset,$rec_limit";
              $result= $conn->query($sql); //rs.open sql,con

              if($result->num_rows > 0){
                //outputing data
                while ($row= $result->fetch_assoc())
                { ?><!--open of while -->
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['state_id']; ?></td>
              <?php
                $id = $row['state_id'];
                $sql1 = "SELECT * FROM states WHERE id = $id ";
                $result1 = $conn->query($sql1);
                  if ($row1= $result1->fetch_assoc()) { ?>
                    <td><?php echo $row1['name']; ?></td>
                <?php  }?>


              <td class="center">
            <a class="btn btn-info" href="core/edit_lga.php?id=<?php echo $row['id']; ?>">
                  <i class="halflings-icon white edit">Edit</i>
                </a>
                <a class="btn btn-danger" onclick="return confirmDel()" href="core/del_lga.php?id=<?php echo $row['id'];?>">
                  <i class="halflings-icon white trash">Delete</i>
                </a>
              </td>
            </tr>
            <?php
               } //close of while
            ?>
            <?php
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"manage_lga.php?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"manage_lga.php?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"manage_lga.php?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"manage_lga.php?page = $last\">Last 10 Records</a>";
         }
         ?>

            <?php
          } ?>
            </tbody>
          </table>
        </div>
