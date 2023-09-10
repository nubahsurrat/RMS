<?php include('header.php'); include('../Controller/orderTimeAction.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Operation</title>
</head>
<body>
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>Search by Username</legend>

			<label>Enter Customer Username to search: </label>	
			<input type="text" name="username" required value="" >
			<input type="submit" name="submit" value="Search">


		</fieldset>
	</form>

</body>
</html>

<?php include('./footer.php'); ?>