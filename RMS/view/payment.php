<?php include('../Controller/paymentm.php'); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<body>

	<?php include('./header.php'); ?>
	
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>


	<form method="post" action="../Controller/paymentm.php">

		<fieldset>
			<legend>Payment</legend>
			<br>
			<label>Select Payment Method</label>
			<br>
			<select>
				<option>Bank</option>
				<option>BKash</option>
				<option>Nagad</option>
			</select>
			<br><br>
			<input type="submit" name="submit" value="Print">
			<br>
		</fieldset>
		
	</form>








</body>
</html>