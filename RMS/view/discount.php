<?php include('header.php');
include('../Controller/discountAction.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discount</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>
	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>
	<h3><a href="../Controller/logout.php">Logout</a></h3>
	<br>

	<form method="post" action="../Controller/discountAction.php">
	<fieldset>
			<legend>Recommended Discount for Customer</legend>

			<label>Enter customer's username to prefer discount: </label>	
			<input type="text" name="username" required value="" ><br><br>
			<label>Discount ammount</label>
			<input type="number" name="discount"><br><br>
			<input type="submit" name="submit" value="Print Cash Memo">
		
	</fieldset>
	</form>


</body>
</html>



<?php include('footer.php'); ?>