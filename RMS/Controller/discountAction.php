<?php  
session_start();

	$username = "";
	$discount = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test_input($_POST['username']);
			$username = test_input($_POST['discount']);

			$message = "";
			if(empty($username)){
				$message .= "Insert username";
				$message .= "<br>";
			}

			if(empty($discount)){
				$message .= "Insert discount ammount";
				$message .= "<br>";
			}

			$message = "";
			if($message =="")
			{
				
				header("Location: ../view/dis.php");

			}
			else
			{
				header("Location: ../view/discount.php");
			}

	}

?>



