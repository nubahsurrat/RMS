<?php  
session_start();

	$username = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test_input($_POST['username']);

			$message = "";
			if(empty($username)){
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{
				$f = fopen("../model/customer.json", 'r');

				$s = fread($f, filesize("../model/customer.json"));

				$data = json_decode($s);
				

				

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of Birth</th>";
				echo "<th>Address</th>";
				echo "<th>Phone No</th>";
				echo "<th>Username</th>";
				echo "</tr>";
				




				for($i=0; $i<sizeof($data); $i++)
				{
					$check = $data[$i]->username;
					if($check === $username){

						echo "<tr>";
						echo "<td>" . $data[$i]->firstname . "</td>";
						echo "<td>" . $data[$i]->lastname . "</td>";
						echo "<td>" . $data[$i]->gender . "</td>";
						echo "<td>" . $data[$i]->dob . "</td>";
						echo "<td>" . $data[$i]->address . "</td>";
						echo "<td>" . $data[$i]->phone . "</td>";
						echo "<td>" . $data[$i]->username . "</td>";
						echo "</tr>";
					}
				}

				echo "</table>";
				

				fclose($f);



			}
			else
			{
				echo $message;
			}

	}

?>



