<?php 
include('header.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notice Board</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3 align="right"><a href="dashboard.php">Homepage</a></h3>


	<h3 align="right"><a href="../Controller/logout.php">Logout</a></h3>

	

	<fieldset>
		<div align="center">
		<h3><legend>Notice Board</legend></h3>
		
		<table border="1">
			
			<tr>
				<th>Description</th>
				<th> </th>
				<th>Publish Date</th>
			</tr>

			<tr>
				<td>Result for appoint to Senior Staff </td>
				<th> </th>
				<td>20/12/22</td>
			</tr>

			<tr>
				<td>Notice for Viva exam for the post of Senior Staff </td>
				<th> </th>
				<td>19/11/22</td>
			</tr>


			<tr>
				<td>Notice for written exam for the recruitment of Senior Staff </td>
				<th> </th>
				<td>14/01/23</td>
			</tr>


			<tr>
				<td>Wanted Notice (Maintenance Engineer)</td>
				<th> </th>
				<td>26/06/22</td>
			</tr>


			<tr>
				<td>Notice for Senior Staff </td>
				<th> </th>
				<td>20/10/22</td>
			</tr>


			<tr>
				<td>Wanted (Asst. Register & MO)</td>
				<th> </th>
				<td>20/11/22</td>
			</tr>


		</table>
	</div>
	</fieldset>




</body>
</html>