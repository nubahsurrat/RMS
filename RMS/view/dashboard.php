<?php 
session_start();
	//include('authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor DashBoard</title>
	<link rel="stylesheet" href="style.css">

</head>





<body>




	<?php include('./header.php'); ?>
	
<br>
<fieldset>

	
	
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3 align="right"><a href="dashboard.php">Homepage</a></h3> 

	<h3 align="right"><a href="../Controller/logout.php">Logout</a></h3>

	
<div align="center">

	<h1><a href="changepassword.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">Change Password</button></h1>


	
	<h1><a href="editprofile.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">Update  Profile</button></h1>


	<h1><a href="viewprofile.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">View  Profile</button></h1>


	<h1><a href="notice.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">See Notice for new staff members</button></h1>

	<h1><a href="order.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">See Order</button></h1>

	<h1><a href="orderTime.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">See Order Item and Time</button></h1>

	<h1><a href="discount.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">Recommended Discount</button></h1>

	<h1><a href="search.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">Search Customer</button></h1>

	<h1><a href="payment.php"><button style="padding: 10px 20px; border-radius: 30px; font-size: 16px; text-transform: uppercase; color: #fff; background-color: #008CBA; border: none; cursor: pointer;">Take Payment</button></h1>
	</div>
	</fieldset>
	<br>

	<?php include('./footer.php'); ?>



</body>
</html>