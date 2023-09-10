<?php
//include('../model/data.json');

	$f = fopen("../model/data.json", 'r');

	$s = fread($f, filesize("../model/data.json"));

	$data = json_decode($s);

	$firstname = $lastname = $gender = $dob = $address = $phone = $uname = $pass = "";

		if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['fname']);
			$lastname = test_input($_POST['lname']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
			$dob = test_input($_POST['dob']);
			$address = test_input($_POST['address']);
			$phone = test_input($_POST['phone']);
			$uname = test_input($_POST['uname']);
			$pass = test_input($_POST['pass']);


			$store = array(
					'firstname' => $firstname, 
					'lastname' => $lastname, 
					'gender' => $gender, 
					'dob' => $dob, 
					'address' => $address,  
					'phone' => $phone, 
					'username' => $uname, 
					'password' => $pass
				);





			$message = "";
			if(empty($firstname)) {

				$message .= "First Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
					$message .= " Frist name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($lastname)) {
				$message .= "Last Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
					$message .= "Last name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($gender)) {
				$message .= "Gender not Selected";
				$message .= "<br>";
			}
			if (empty($dob)) {
				$message .= "Date of birth empty";
				$message .= "<br>";
			}
			
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			
			if (empty($phone)) {
				$message .= "Mobileno is Empty";
				$message .= "<br>";
			}
			
			if(empty($uname)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

			if(empty($pass)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
			}

			
			$unot = "false";
			$uex = "false";
			if ($message === ""){

				for($i=0; $i<sizeof($data); $i++)
				{
					if($data[$i]->username === $uname){
						$uex = "true";
						$message .= "Username already exist.";
						$message .= "<br>";
						break; 
					}
				}
			}
			



			if ($message === "" && $uex === "false"){

				if(filesize("../model/data.json") == 0){
					$file = $store;

					echo "Registration Successful";

				}

				else{
					$oldfile = json_decode(file_get_contents("../model/data.json"));

					array_push($oldfile, $store);

					$file = $oldfile;
					header("Location: ../view/login.php?mes=Registration Successful");
					echo "Registration Successful";
				}

				if(!file_put_contents("../model/data.json", json_encode($file,JSON_PRETTY_PRINT),LOCK_EX)){
					$error = "Error storing, please try again.";
				}
				else{
					$success = "Message store successfully.";
				}

			}


			
			else {
				
				echo $message;
				echo "<br>";
			}
		}
?>