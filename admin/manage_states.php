<title>Online Crime Reporting System | Manage States</title>

<body>
<?php include('framework/header.php'); ?>
<?php include('framework/navbar/navbar.php');

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: dashboard.php");
  exit;
} */?>
<?php include('core/translate.php'); ?>
<div class="content_admin">
  <input type="text"  name="valueToSearch" placeholder="Value To Search">
  <span style="text-align:center;color:white;"><h1>Manage States</h1></span>
          <table class="table table-striped table-bordered bootstrap-datatable datatable" id="myTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
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
               $page_sql = "SELECT COUNT(*) FROM states";
               $result = $conn->query($page_sql);
               $total_rows = mysqli_fetch_array($result)[0];
               $total_pages = ceil($total_rows/$rec_per_page);

              $sql = "SELECT * FROM states LIMIT $offset,$rec_per_page";
              $result= $conn->query($sql); //rs.open sql,con

              if($result->num_rows > 0){
                //outputing data
                while ($row= $result->fetch_assoc())
                { ?><!--open of while -->
            <tr>
              <td><?php echo $row['ID']; ?></td>
              <td><?php echo $row['Name']; ?></td>
              <td class="center">
            <a class="btn btn-info" href="edit_states.php?id=<?php echo $row['ID']; ?>">
                  <i class="halflings-icon white edit">Edit</i>
                </a>
                <a class="btn btn-danger" onclick="return confirmDel()" href="core/del_states.php?id=<?php echo $row['ID'];?>">
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
              <td colspan="8"><?php echo "no results to display"; ?></td>

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
        <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
        <?php include('framework/footer.php'); ?>
