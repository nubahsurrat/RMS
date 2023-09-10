<?php
session_start();
include('header.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<h1>Please collect your payment receive from Accountant.</h1>

	<br>

	<a href="dashboard.php">Go Back</a>

</body>
</html>