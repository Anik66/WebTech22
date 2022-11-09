<?php
    include("../process/Loginresult.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body align="center">
	
	 
	<form action="" method="post" enctype="multipart/form-data">
			
		<table align="center">
		<h1>Login</h1>

			<tr align="center">
				<td>User Name</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder= "Enter Username" ></td>
			</tr>
			<tr align="center">
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"placeholder= "Enter Password"></td>
			</tr>		
		</table>
	
		<input type="submit" name="login" value="login">
		<input type="submit" name="Reset" value="Reset"> <br>

		<a href="Doctor.php">Create Account </a><br>
		<a href="Home.php">Home</a>
		
		
		

	
		
			
	</form>		

	<br>

	

</body>

<div align="center">
		<?php include 'Footer.php';?>
	</div>
</html>


