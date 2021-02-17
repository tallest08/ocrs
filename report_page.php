<title>Online Crime Reporting System | Report Page</title>
  <body>
<?php include('framework/header.php');
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: report_crime.php");
  exit;
}
?>
<?php include('framework/navbar/mainnavbar.php'); ?>
<?php include('core/translate.php'); ?>
<div class="contentArea">
  <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <?php include("core/reportvalidation.php"); ?>
    <table border="0" cellspacing="1" cellpadding="1" class="tableb">
      <tr>
        <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;" >Report Form</p></td>
      </tr>
      <tr>
        <td colspan="2">

        </td>
      </tr>
      <tr>
        <td><p>Crime Type:</p></td>
        <td>
          <select id="crimetype" name="crimetype">
                <option value="null">Please Select Crime Type</option>
                <?php
                $crime_req = mysqli_query($conn, "SELECT * FROM crime");
                while ($row = mysqli_fetch_array($crime_req)) {
                  ?>
                  <option value="<?php echo $row["ID"]; ?>" ><?php $crimetype= $row["CrimeType"]; echo $crimetype; ?></option>
                  <?php
                }
                ?>
              </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $crimetypeErr;?></span></td>
      </tr>
      <tr>
        <td><p>State:</p> </td>
        <td>
          <select id="states" name="states" onChange="changeStates()">
            <option value="null">Please Select State</option>
            <?php
            $state_req = mysqli_query($conn, "SELECT * FROM states");
            while ($row = mysqli_fetch_array($state_req)) {
              ?>
              <option value="<?php echo $row["ID"];?>"><?php echo $row["Name"];?></option>
              <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $statesErr; ?></span></td>
      </tr>
      <tr>
        <td><p>Local Government:</p></td>
        <td>
          <select id="lga" name="lga">
            <option value="null">Select Local Government</option>
            <?php
            $lga_req = mysqli_query($conn, "SELECT * from states");
            while ($row = mysqli_fetch_array($state_req)) {
              ?>
              <option><?php echo $row["name"]; ?></option>
              <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $lgaErr; ?></span></td>
      </tr>
      <tr>
        <td><p>Description of Location:</p> </td>
        <td>
          <textarea name="lDescription" cols="45" rows="5" placeholder="Description of Location of Incident(e.g Address, Nearest Landmark,etc.)"   ></textarea>
      </tr>
      <tr>
        <td></td>
        <td><span class="error">* <?php echo $lDescriptionErr; ?></span></td>
      </tr>
      <tr>
        <td><p>Incident: </p></td>
        <td>
          <textarea name="incident" cols="45" rows="5" placeholder="Description of the incident that occurred(e.g Event, Decription of Perpetrator, etc."></textarea>
      </tr>
      <tr>
        <td></td>
        <td>
          <span class="error">* <?php echo $incidentErr;?></span>
      </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <span class="success"><?php echo $success; ?></span>
          <span class="error"><?php echo $failed; ?></span>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="Submit" value="Submit">
          <input type="reset" name="reset" value="Clear">
        </td>
      </tr>
    </tr>
    <td></td>
      <td style="text-align:center;"><span style="color:rgb(255,255,255);font:calibri;">Do you want to register?</span> <a href="registration.php">Click Here</a> </td>
   <tr>
    </table>
  </form>
</div>

  <script type="text/javascript">
    function changeStates(){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET","ajax.php?state="+document.getElementById("states").value,false);
      xmlhttp.send(null);
      document.getElementById("lga").innerHTML = xmlhttp.responseText;
      if (document.getElementById("states").value == "Please Select State"){
        document.getElementById("lga").innerHTML = "<select><option>Please Select Local Government</option></select>";
      }
    }
  </script>
<?php include('framework/footer.php'); ?>
