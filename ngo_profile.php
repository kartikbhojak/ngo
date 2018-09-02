<?php
session_start();
$id=$_SESSION["id"];
if(!isset($_SESSION['ngouser']))
{
  $error="sorry you are not logged in or not registered with us.You will be redirected to signup page.";
  echo "<script type='text/javascript'>alert('$error');window.location='signup.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile|NGO Panel</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('navlogout.php');
?>
<div class="container" >
<table class="table table-bordered">
    <div class="table responsive">
    <h1>Profile</h1>
    <thead>
    <tr>
    <th><h3>NGO ID</h3></th>
    <th><h3>NGO name</h3></th>
    <th><h3>Email</h3></th>
    <th><h3>Achievements</h3></th>
    <th><h3>Phone</h3></th>
    <th><h3>Address</h3></th>
    <th><h3>Area</h3></th>
  
    </tr>
    </thead>
    <tbody>
    <?php
    include('connection.php');
$sql=mysqli_query($conn,"select ngo_id,NGO_name,Email,Phone,address,Area,achievements from registration where ngo_id='$id'");
$count=mysqli_num_rows($sql);
if(mysqli_num_rows($sql)>0)
{
    while($row=mysqli_fetch_assoc($sql))
    {
         
        echo "<tr>".
        "<td>".$row["ngo_id"]."</td>".
         "<td>".$row["NGO_name"]."</td>".
        "<td>".$row["Email"]."</td>".
        "<td>".$row["achievements"]."</td>".
        "<td>".$row["Phone"]."</td>".
        "<td>".$row["address"]."</td>".
        "<td>".$row["Area"]."</td>".
        
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