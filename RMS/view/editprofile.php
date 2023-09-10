<?php include('header.php'); 
include('../Controller/editAction.php')?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
</head>




<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>



	<form method="post" action="../Controller/editAction.php" novalidate>

		<fieldset>
			<legend>Edit Profile Form</legend>

			<label>Frist Name:</label>
			<input type="text" name="fname" required value = "<?php echo $_SESSION['firstname']; ?>">

			<br><br>

			<label>Last Name:</label>
			<input type="text" name="lname" required value = "<?php echo $_SESSION['lastname']; ?>">

			<br><br>

			<label>Address:</label>
			<input type="text" name="address" required value = "<?php echo $_SESSION['address']; ?>">
			
			<br><br>

			<label>Phone Number</label>
			<input type="Number" name="phone" required value = "<?php echo $_SESSION['phone']; ?>">

			<br><br>

			<input type="submit" name="submit" value="Update">

			<br><br>

			<a href="dashboard.php">Go to dashboard </a>

			

		</fieldset>

	</form>


</body>
</html>

<?php include('./footer.php'); ?>