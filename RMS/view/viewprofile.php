<?php include('./header.php'); 
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

<br>

	<h3 align="center"> <?php if(isset($_SESSION['up'])) {echo $_SESSION['up'];} ?> </h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<h4>First name : <?php echo $_SESSION['firstname'];?> </h4>
	<h4>Last name : <?php echo $_SESSION['lastname'];?> </h4>
	<h4>Gender : <?php echo $_SESSION['gender'];?> </h4>
	<h4>Date of Birth : <?php echo $_SESSION['dob'];?> </h4>
	<h4>Address : <?php echo $_SESSION['address'];?> </h4>
	<h4>Phone No : <?php echo $_SESSION['phone'];?> </h4>

	<br>

	<a href="editprofile.php">Click here to update profile.</a>







</body>
</html>

<?php include('./footer.php'); ?>