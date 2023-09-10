<?php 
session_start() ;
//include('../model/data.json');

	$username = $password = "";

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$f = fopen("../model/data.json", 'r');

		$s = fread($f, filesize("../model/data.json"));

		$data = json_decode($s);

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);

		$message = "";
		if(empty($username)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

		if(empty($password)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
		}


		$a = true;
		
		$flag = false;
		if ($message === ""){

			for($i=0; $i<sizeof($data); $i++)
			{
				if($data[$i]->username === $username and $data[$i]->password === $password){
					$flag = true;
					$role = $data[$i]->role;

					$_SESSION['firstname'] = $data[$i]->firstname;
					$_SESSION['lastname'] = $data[$i]->lastname;
					$_SESSION['gender'] = $data[$i]->gender;
					$_SESSION['dob'] = $data[$i]->dob;
					$_SESSION['address'] = $data[$i]->address;
					$_SESSION['phone'] = $data[$i]->phone;
					$_SESSION['username'] = $data[$i]->username;
					$_SESSION['password'] = $data[$i]->password;
					break; 
				}
			}
		}
		else{

			
			$_SESSION['msg'] = $message;
			header("Location: ../view/login.php");
			echo "<br>";
			echo "<br>";

			$a = false;
			
		}

	
		if(!$flag){

			if($a){
				$_SESSION['us'] = "Username / Password incorrect. Try again...";
				header("Location: ../view/login.php");
				echo "Username / Password incorrect. Try again...";

				echo "<br>";
				echo "<br>";

			}

			
		}

		
		else
		{
			echo "<br>";
			echo "<br>";
			$_SESSION['auth'] = $role;
			
			header("Location: ../view/dashboard.php");
			
		}
	}




?>

