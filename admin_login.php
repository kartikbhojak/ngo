
<!DOCTYPE html>
<html>
<head>
	<title>	NGO|Admin Login</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.container
{
	max-width:500px;
	margin: 0 auto;
}
input
{
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 5px;
	resize: vertical;
}
</style>
</head>
<body>
<div class="container">
<form method="post">
<h2>Admin Login</h2>
<input type="text" name="username" required="yes" placeholder="enter the valid username"><br><br>
<input type="password" name="password" required="yes" placeholder="enter the valid password"><br><br>
<button class="btn btn-primary" name="submit">Submit</button>

</form>
</div>
</body>
</html>
<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$pass=$_POST['password'];

	$sql=mysqli_query($conn,"select * from admin_login where admin_username='$username' && admin_pass='$pass'");
	$count=mysqli_num_rows($sql);
	if($count==1)
	{
		$_SESSION['admin_username']=$username;
		$_SESSION['admin_password']=$pass;
		$message="You are successfully logged in.";
  echo "<script type='text/javascript'>alert('$message');window.location='admin.php';</script>";
	}
	else
	{
		$error="Invalid username or password. Try again";
  echo "<script type='text/javascript'>alert('$error');window.location='admin_login.php';</script>";
	}

}
?>