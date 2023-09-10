<?php include('./header.php');
include('../Controller/changepassAction.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset Password</title>
</head>
<body>


	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3 align="center"> <?php if(isset($_SESSION['cp'])) {echo $_SESSION['cp'];} ?> </h3>

	<br>


	<h3 align="right"><a href="dashboard.php">Homepage</a></h3>


	<h3 align="right"><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<form method="post" action="../Controller/changepassAction.php" novalidate>
		<fieldset>
			<div align="center">
			<h1><legend>Change Password</legend></h1>
			<label>Username</label>
			<input type="text" name="username" required value="<?php echo $_SESSION['username'];?>">
			<label>Old Password</label>
			<input type="text" name="oldpass">
			<br><br>
			<label>New Password</label>
			<input type="text" name="newpass">
			<br><br>
			<input type="submit" name="submit" value="Change Password">
			</div>
		</fieldset>
	</form>

	<a href="dashboard.php">Go Back</a>

</body>
</html>

<?php include('./footer.php'); ?>
