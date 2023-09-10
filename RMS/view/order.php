<?php include('header.php');
include('../Controller/orderAction.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>
	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>
	<h3><a href="../Controller/logout.php">Logout</a></h3>
	<br>

	<form method="post" action="../Controller/orderAction.php">
	<fieldset>
			<legend>Search Customer's Order</legend>

			<label>Enter customer username to search order: </label>	
			<input type="text" name="username" required value="" >
			<input type="submit" name="submit" value="Print Order">
		
	</fieldset>
	</form>


</body>
</html>



<?php include('footer.php'); ?>