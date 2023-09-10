<?php
include('header.php');
include('../Controller/regAction.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

	<form method="post" action="../Controller/regAction.php" novalidate>

		<fieldset>
			<legend>Registration Form</legend>

			<label>Frist Name:</label>
			<input type="text" name="fname" required value = "<?php echo $firstname; ?>">

			<br><br>

			<label>Last Name:</label>
			<input type="text" name="lname" required value = "<?php echo $lastname; ?>">

			<br><br>

			<label>Gender:</label>
			<input type="radio" name="gender" value="Female">
			<label>Female</label>
			<input type="radio" name="gender" value="Male">
			<label>Male</label>

			<br><br>

			<label>Date of Birth:</label>
			<input type="Date" name="dob" required value = "<?php echo $dob; ?>">

			<br><br>

			<label>Address:</label>
			<input type="text" name="address" required value = "<?php echo $address; ?>">
			
			<br><br>

			<label>Phone Number</label>
			<input type="Number" name="phone" required value = "<?php echo $phone; ?>">

			<br><br>

			<label>Username</label>
			<input type="text" name="uname" required value = "<?php echo $uname; ?>">
			<br><br>

			<label>Password</label>
			<input type="text" name="pass" required value = "<?php echo $pass; ?>">
			<br><br>
			<input type="submit" name="submit" value="Registration">


			<br><br>
			<br><br>

			<p>Already have an account?</p>
			<a href="login.php">Click here for Log in!</a>

		</fieldset>

	</form>


</body>
</html>

<?php include('footer.php'); ?>