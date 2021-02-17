<?php
$query1 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=21");
$query2 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=22");
$query3 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=23");
$query4 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=24");
$query5 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=25");
$query6 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=26");
$query7 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=27");
$query8 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=28");
$query9 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=29");
$query10 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE CrimeTypeID=30");
$row1=mysqli_fetch_array($query1);
$row2=mysqli_fetch_array($query2);
$row3=mysqli_fetch_array($query3);
$row4=mysqli_fetch_array($query4);
$row5=mysqli_fetch_array($query5);
$row6=mysqli_fetch_array($query6);
$row7=mysqli_fetch_array($query7);
$row8=mysqli_fetch_array($query8);
$row9=mysqli_fetch_array($query9);
$row10=mysqli_fetch_array($query10);

$result1 = $row1['COUNT'];
$result2 = $row2['COUNT'];
$result3 = $row3['COUNT'];
$result4 = $row4['COUNT'];
$result5 = $row5['COUNT'];
$result6 = $row6['COUNT'];
$result7 = $row7['COUNT'];
$result8 = $row8['COUNT'];
$result9 = $row9['COUNT'];
$result10 = $row10['COUNT'];

 ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);


  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Crime', 'Values'],
      <?php
      echo "['Larceny/Theft',$result1],";
      echo "['Burglary',$result2],";
      echo "['Domestic Violence',$result3],";
      echo "['Armed Robbery',$result4],";
      echo "['Terrorism',$result5],";
      echo "['Gang Violence',$result6],";
      echo "['Kidnapping',$result7],";
      echo "['Cybercrime',$result8],";
      echo "['Rape',$result9],";
      echo "['Homicide',$result10],";
      //echo "['Homicide'.",". $result1."],";
      //echo "['Burglary',     $result2;],
      //['Domestic Violence', echo $result3;],
      //['Armed Robbery', echo $result4;],
      //['Terrorism',   echo $result5;]
      //['Gang Violence', echo $result6;]
      //['Kidnapping', echo $result7;]
      //['Cybercrime', echo $result8;]
     // ['Rape', echo $result9;]
      //['Homicide', echo $result10;]?>
    ]);

    var options = {
      title: 'Crime Statistics Based on Reports'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
<div id="piechart" style="margin:auto;margin-top: 1%;width: 500px; height: 400px;"></div>
