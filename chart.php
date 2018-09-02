<?php
session_start();
$id=$_SESSION["id"];
if(!isset($_SESSION['ngouser']))
{
  $error="sorry you are not logged in or not registered with us.You will be redirected to signup page.";
  echo "<script type='text/javascript'>alert('$error');window.location='signup.php';</script>";
}
else
{
include('connection.php');

$sql=mysqli_query($conn,"select req,count(req) from ngo_requirements where ngo_id='$id' group by req ");
}
?>

<html>
  <head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Requirements', 'Count(requirements)'],
          <?php

          while($row=mysqli_fetch_assoc($sql))
          {
            echo "['".$row['req']."',".$row['count(req)']."],";
          }
          ?>
        ]);

        var options = {
          title: 'NGO Requirements according to category'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <?php
include('navlogout.php');
?>
  <h1 style="text-align: center;">NGO Requirement analysis</h1>
    <div id="piechart" style="max-width: 900px; height: 500px;margin: 0 auto;"></div>
  <div class="container" >
<table class="table table-bordered">
    <div class="table responsive">
    
    <thead>
    <tr>
    <th><h3>Requirements</h3></th>
    <th><h3>Requirements Description</h3></th>
  
    </tr>
    </thead>
    <tbody>
    <?php
    include('connection.php');
$sql=mysqli_query($conn,"select req,req_descr from ngo_requirements where ngo_id='$id'");
$count=mysqli_num_rows($sql);
if(mysqli_num_rows($sql)>0)
{
    while($row=mysqli_fetch_assoc($sql))
    {
         
        echo "<tr>".
        "<td>".$row["req"]."</td>".
         "<td>".$row["req_descr"]."</td>".
        "</tr>";
    }
}
else
{
    echo "no results";
}
mysqli_close($conn);
    ?>
    </tbody>
    </div>
</table>
</div>
  <?php
include('footer.php');
?>

  </body>
</html>