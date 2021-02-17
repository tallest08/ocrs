<?php

include('framework/config.php');

 ?>
 <?php
 $query1 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=1");
 $query2 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=2");
 $query3 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=3");
 $query4 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=4");
 $query5 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=5");
 $query6 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=6");
 $query7 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=7");
 $query8 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=8");
 $query9 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=9");
 $query10 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=10");
 $query11 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=11");
 $query12 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=12");
 $query13 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=13");
 $query14 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=14");
 $query15 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=15");
 $query16 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=16");
 $query17 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=17");
 $query18 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=18");
 $query19 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=19");
 $query20 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=20");
 $query21 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=21");
 $query22 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=22");
 $query23 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=23");
 $query24 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=24");
 $query25 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=25");
 $query26 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=26");
 $query27 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=27");
 $query28 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=28");
 $query29 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=29");
 $query30 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=30");
 $query31 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=31");
 $query32 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=32");
 $query33 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=33");
 $query34 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=34");
 $query35 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=35");
 $query36 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=36");
 $query37 = mysqli_query($conn, "SELECT COUNT(*) as COUNT FROM incident WHERE StateID=37");

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
 $row11=mysqli_fetch_array($query11);
 $row12=mysqli_fetch_array($query12);
 $row13=mysqli_fetch_array($query13);
 $row14=mysqli_fetch_array($query14);
 $row15=mysqli_fetch_array($query15);
 $row16=mysqli_fetch_array($query16);
 $row17=mysqli_fetch_array($query17);
 $row18=mysqli_fetch_array($query18);
 $row19=mysqli_fetch_array($query19);
 $row20=mysqli_fetch_array($query20);
 $row21=mysqli_fetch_array($query21);
 $row22=mysqli_fetch_array($query22);
 $row23=mysqli_fetch_array($query23);
 $row24=mysqli_fetch_array($query24);
 $row25=mysqli_fetch_array($query25);
 $row26=mysqli_fetch_array($query26);
 $row27=mysqli_fetch_array($query27);
 $row28=mysqli_fetch_array($query28);
 $row29=mysqli_fetch_array($query29);
 $row30=mysqli_fetch_array($query30);
 $row31=mysqli_fetch_array($query31);
 $row32=mysqli_fetch_array($query32);
 $row33=mysqli_fetch_array($query33);
 $row34=mysqli_fetch_array($query34);
 $row35=mysqli_fetch_array($query35);
 $row36=mysqli_fetch_array($query36);
 $row37=mysqli_fetch_array($query37);


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
 $result11 = $row11['COUNT'];
 $result12 = $row12['COUNT'];
 $result13 = $row13['COUNT'];
 $result14 = $row14['COUNT'];
 $result15 = $row15['COUNT'];
 $result16 = $row16['COUNT'];
 $result17 = $row17['COUNT'];
 $result18 = $row18['COUNT'];
 $result19 = $row19['COUNT'];
 $result20 = $row20['COUNT'];
 $result21 = $row21['COUNT'];
 $result22 = $row22['COUNT'];
 $result23 = $row23['COUNT'];
 $result24 = $row24['COUNT'];
 $result25 = $row25['COUNT'];
 $result26 = $row26['COUNT'];
 $result27 = $row27['COUNT'];
 $result28 = $row28['COUNT'];
 $result29 = $row29['COUNT'];
 $result30 = $row30['COUNT'];
 $result31 = $row31['COUNT'];
 $result32 = $row32['COUNT'];
 $result33 = $row33['COUNT'];
 $result34 = $row34['COUNT'];
 $result35 = $row35['COUNT'];
 $result36 = $row36['COUNT'];
 $result37 = $row37['COUNT'];



  ?>

 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['States',   'Rate of Crime'],
          <?php
          echo "['Abia',$result1],";
          echo "['Adamawa',$result2],";
          echo "['Akwa Ibom',$result3],";
          echo "['Anambra',$result4],";
          echo "['Bauchi',$result5],";
          echo "['Bayelsa',$result6],";
          echo "['Benue',$result7],";
          echo "['Borno',$result8],";
          echo "['Cross Rivers',$result9],";
          echo "['Delta',$result10],";
          echo "['Ebonyi',$result11],";
          echo "['Edo',$result12],";
          echo "['Ekiti',$result13],";
          echo "['Enugu',$result14],";
          echo "['FCT',$result15],";
          echo "['Gombe',$result16],";
          echo "['Imon',$result17],";
          echo "['Jigawa',$result18],";
          echo "['Kaduna',$result19],";
          echo "['Kano',$result20],";
          echo "['Kastina',$result21],";
          echo "['Kebbi',$result22],";
          echo "['Kogi',$result23],";
          echo "['Kwara',$result24],";
          echo "['Lagos',$result25],";
          echo "['Nasarrawa',$result26],";
          echo "['Niger',$result27],";
          echo "['Ogun',$result28],";
          echo "['Ondo',$result29],";
          echo "['Osun',$result30],";
          echo "['Oyo',$result31],";
          echo "['Plateau',$result32],";
          echo "['Rivers',$result33],";
          echo "['Sokoto',$result34],";
          echo "['Taraba',$result35],";
          echo "['Yola',$result36],";
          echo "['Zamfara',$result37],";

?>
        ]);

        var options = {
          chart: {
            title: 'Crime Statistics per State based on Report',
            subtitle: '2019',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>





  </head>
  <body>

    <div id="barchart_material" style="margin: auto;margin-top: 1%;width: 900px; height: 500px;"></div>


  </body>
</html>
