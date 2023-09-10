<?php
session_start();

	if($_SERVER['REQUEST_METHOD'] === "POST"){


		$f = fopen("../model/data.json", 'r+');
		$s = fread($f, filesize("../model/data.json"));
		$data = json_decode($s);
		

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$password = test_input($_POST['oldpass']);
		$newpass = test_input($_POST['newpass']);
		$store ="";
		$olddata = "";

		$flag = false;


		$message = "";
		if(empty($username)){
				$message .= "Fillup username";
				$message .= "<br>";
			}

			if(empty($password)){
				$message .= "Fillup old password";
				$message .= "<br>";
			}

			if(empty($newpass)){
				$message .= "Fillup new password";
				$message .= "<br>";
			}

			if($message === "")
			{

			$olddata = json_decode(file_get_contents("../model/data.json"));
		for($i = 0; $i<sizeof($data); $i++)
		{

			if($data[$i]->username === $_SESSION['username'] and $data[$i]->password === $_SESSION['password']){



				$store = array(
					'firstname' => $data[$i]->firstname, 
					'lastname' => $data[$i]->lastname,
					'gender' => $data[$i]->gender,
					'dob' => $data[$i]->dob,
					'address' => $data[$i]->address,
					'phone' => $data[$i]->phone,
					'username' => $data[$i]->username, 
					'password' => $newpass
				);

				
				array_push($olddata, $store);
				$file = json_decode(file_get_contents("../model/data.json"));

				$flag = true;
				if(!file_put_contents("../model/data.json", json_encode($file, JSON_PRETTY_PRINT),LOCK_EX))
				{
					$error = "Error storing message, please try again.";
				}
				else
				{
					$success = "Message store successfully.";
				}
				
			}	
			else{
				$store = array(
					'firstname' => $data[$i]->firstname, 
					'lastname' => $data[$i]->lastname,
					'gender' => $data[$i]->gender,
					'dob' => $data[$i]->dob,
					'address' => $data[$i]->address,
					'phone' => $data[$i]->phone,
					'username' => $data[$i]->username, 
					'password' => $newpass
				);

				array_push($olddata, $store);
				$file = json_decode(file_get_contents("../model/data.json"));

				$flag = true;
				if(!file_put_contents("../model/data.json", json_encode($file, JSON_PRETTY_PRINT),LOCK_EX))
				{
					$error = "Error storing message, please try again.";
				}
				else
				{
					$success = "Message store successfully.";
				}


			}	

		}

	}
	else
	{
		echo $message;
				echo "<br>";
	}

		
		if($flag){
			$_SESSION['cp'] = "Password Change Successfully.";
			header("Location: ../view/changepassword.php");
			echo "Password change successfully.";
		}
		else{
			$_SESSION['cp'] = "Content not found.";
			header("Location: ../view/changepassword.php");
			echo "Content not found";
		}
	}
?>