<?php
	session_start();

	$username = $password = "";
	$usernameErr = $passwordErr = "";
	$isValid = true;

	if (isset($_POST['login'])) {		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
			if (!isset($_POST['username']) || empty($_POST['username'])) {
	
				$usernameErr = "User Name is required";
				$isValid = false;
			}
			else{
				$username = $_POST['username'];
			}
	
			if (!isset($_POST['password']) || empty($_POST['password'])) {
				$passwordErr = "Password is required";
				$isValid = false;
			}
			else{
				$password = $_POST['password'];
			}
		
			if($isValid) {
				$data = json_decode(file_get_contents('../Data/data.json'), true);
	
				if(is_array($data)){
					echo $message = "User not found";
	
					foreach($data as $key => $value){
						if ($value['first_name'] == $_POST['username']) {
							if ($value['password'] == $_POST['password']) {
								$_SESSION['first_name'] = $_POST['username'];
								$_SESSION['password']=$_POST['password'];
								
								header('Location: ../view/viewprofile.php');
							}
							else{
								echo $message = "Password does not match";
							}
						}
					}
				}
				else{
					echo $message = "User not found";
				}
			}
		}
	}


	
?>