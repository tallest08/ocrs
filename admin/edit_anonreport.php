<?php
include("framework/header.php");
include("framework/navbar/navbar.php");





//intialize variables
$fnameErr =$mnameErr = $lnameErr= $genderErr = $addressErr = $mobilenoErr = $usernameErr = $passwordErr = $cpasswordErr = $usernameErr2 = $emailErr = $emailErr2 = "";
$success = "";
$failed = ""; //intialize variable
$deleted = "";
$status ="";

$id = $_GET['id'];

//sql statement to edit user
$report_query ="SELECT * FROM incident WHERE ID = '$id'";
$result= $conn->query($report_query);
if($result->num_rows > 0){
  if ($row= $result->fetch_assoc()) {
    //$crimetypeErr = $statesErr = $lgaErr = $lDescriptionErr = $incidentErr = $securityagentErr = $reportedby = "";
    $crimetype = $row['CrimeTypeID'];
    $states = $row['StateID'];

    $lga = $row['LGA'];
    $lDescription =  $row['LocDescription'];
    $incident = $row['Report'];
    $progressnote =$row['ProgressNote'];

  }
}


 ?>


<?php include('core/translate.php'); ?>
 <div class="contentArea">
   <form class="form" action="core/anonreportdata.php" method="post">

     <table border="0" cellspacing="1" cellpadding="1" class="tableb">
       <tr>
         <td colspan="2" ><p style="text-align:center;font:Calibri;font-size:24px;color:rgb(255,255,255);margin-left:30px;" >Update Report Form</p></td>
       </tr>
       <tr>
         <td colspan="2">
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="crimetype" value="<?php echo $crimetype; ?>">
           <input type="hidden" name="states" value="<?php echo $states; ?>">
           <input type="hidden" name="lga" value="<?php echo $lga; ?>">
           <input type="hidden" name="lDescription" value="<?php echo $lDescription; ?>">
           <input type="hidden" name="incident" value="<?php echo $incident; ?>">
         </td>
       </tr>
       <tr>
         <td><p>Crime Type:</p></td>
         <td>
           <?php
             $id = $crimetype;
             $sql1 = "SELECT * FROM crime WHERE ID = $id ";
             $result1 = $conn->query($sql1);
               if ($row1= $result1->fetch_assoc()) { ?>
              <p style="text-align:left;"><?php echo $row1['CrimeType']; ?></p>
             <?php  }?>
         </td>
       </tr>
       <tr>
         <td><p>State:</p> </td>
         <td>
             <?php
               $id = $states;
               $sql1 = "SELECT * FROM states WHERE ID = $id ";
               $result1 = $conn->query($sql1);
                 if ($row1= $result1->fetch_assoc()) { ?>
                   <p style="text-align:left;"><?php echo $row1['Name']; ?></p>
               <?php  }?>
         </td>
       </tr>
       <tr>
         <td><p>Local Government:</p></td>
         <td>
           <p style="text-align:left;"><?php echo $lga;?></p>
         </td>
       </tr>
       <tr>
         <td><p>Description of Location:</p> </td>
         <td>
           <p style="text-align:left;"> <?php echo $lDescription;?></p>
       </tr>
       <tr>
         <td><p>Incident: </p></td>
         <td>
            <p style="text-align:left;"><?php echo $incident;?></p>
       </tr>
       <tr>
         <td><p>Progress Notes:</p></td>
         <td>
           <textarea name="progressnote" rows="8" cols="80" placeholder="Enter Progress Related to Report"><?php echo $progressnote; ?></textarea>
         </td>
       </tr>
       <tr>
         <td><p>Status:</p></td>
         <td>
           <select  name="status">
             <option value="Pending">Open</option>
             <option value="Completed">Closed</option>
           </select>
         </td>
       </tr>
       <tr>
         <td></td>
         <td>
           <input type="submit" name="Update" value="Submit">
           <input type="reset" name="reset" value="Clear">
         </td>
       </tr>

     </table>
   </form>
 </div>
