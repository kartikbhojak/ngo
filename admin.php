<?php
session_start();
if(!isset($_SESSION['admin_username']))
{
  $error="sorry it looks like you are not an admin and so you are not allowed to visit the page.";
  echo "<script type='text/javascript'>alert('$error');window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Admin Panel</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<table class="table table-bordered">
	<div class="table responsive">
	<thead>
	<tr>
	<th>NGO Name</th>
	<th>NGO ID</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Area</th>
	<th>Achievements</th>
	<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php
	include('connection.php');
$sql=mysqli_query($conn,"select * from  registration");
$count=mysqli_num_rows($sql);
if(mysqli_num_rows($sql)>0)
{
	while($row=mysqli_fetch_assoc($sql))
	{
		
		echo "<tr>".
		"<td>".$row["NGO_name"]."</td>".
		"<td>".$row["ngo_id"]."</td>".
		"<td>".$row["Email"]."</td>".
		"<td>".$row["Phone"]."</td>".
		"<td>".$row["address"]."</td>".
		"<td>".$row["Area"]."</td>".
		"<td>".$row["achievements"]."</td>".
		"<td>".$row["status"]."</td>".
		"<td><a href='approve.php?id=".$row["ngo_id"]."&&ngoemail=".$row["Email"]."'>Approve</a></td>".
		"<td><a href='not approve.php?id=".$row["ngo_id"]."&&ngoemail=".$row["Email"]."'>Not Approve</a></td>".
		//'<td><button class="btn btn-primary btn-modal" onclick="modalname()">Donate</button></td>'.
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
</body>
</html>