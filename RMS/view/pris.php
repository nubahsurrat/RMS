<?php include('header.php'); session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pescription</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>
	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>
	<h3><a href="../Controller/logout.php">Logout</a></h3>
	<br>

	<br><br>
	<h1>Please collect the printed prescription paper from Receptionist</h1>


</body>
</html>


<?php include('footer.php'); ?>