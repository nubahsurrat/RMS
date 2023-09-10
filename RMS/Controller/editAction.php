<?php  
session_start();

	if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['fname']);
			$lastname = test_input($_POST['lname']);
			$address = test_input($_POST['address']);
			$phone = test_input($_POST['phone']);
			


			$store = array(
					'firstname' => $firstname, 
					'lastname' => $lastname, 
					'gender' => $_SESSION['gender'], 
					'dob' => $_SESSION['dob'],
					'address' => $address,  
					'phone' => $phone,
					'username' => $_SESSION['username'],  
					'password' => $_SESSION['password']
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
			
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			
			if (empty($phone)) {
				$message .= "Mobileno is Empty";
				$message .= "<br>";
			}
			

			
		
			if ($message === ""){

					$oldfile = json_decode(file_get_contents("../model/data.json"));

					array_push($oldfile, $store);

					$file = $oldfile;
					if(!file_put_contents("../model/data.json", json_encode($file,JSON_PRETTY_PRINT),LOCK_EX)){
						$error = "Error storing, please try again.";
					}
					else{
						$success = "Message store successfully.";
					}

					$_SESSION['up'] = "Data Updated";
					header("Location: ../view/viewprofile.php");
			}
			else {
				
				echo $message;
				echo "<br>";
			}
				
		}


			
			
		

?>








