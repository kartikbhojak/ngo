<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.redirect
		{
			max-width: 500px;
			margin: 0 auto;
			border: 1px solid black;
			border-radius: 5px;
			text-align: center;
			margin-top: 15%;
		}
	</style>
</head>
<body>
<?php
include('navwithlogin.php');
?>
<div class="redirect">
<h1>Thank You for Contacting Us.<br>We Will get back to you shortly.</h1>
</div>
<?php
header("refresh:2; url=index.php");
?>
</body>

</html>