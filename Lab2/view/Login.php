<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <div align="center">
    <h1 > Doctor Login <h1>
</div>
</head>
<body>

<?php

	include("../process/Loginresult.php");
?>

	<form align="center" action="process/Loginresult.php"method="POST" enctype="multi/form-data">
		
		<table align="center">
			<tr align="center" >
				<td>Enter Doctor User Name :</td>
				<td><input type="text" name="name" placeholder="">  </td>
			</tr>
			<tr align="center">
				<td> Enter Doctor Password :</td>
				<td><input type="password" name="name" placeholder=" "> </td>
			</tr>
		</table>
	</form>		
	<div align="center">
		<input type="submit" name="name" value="Login">
		<input type="reset" name="name" value="Reset">
	</div>
                

	<div align="center">
		<a href=" ../view/Doctor.php">Click for registration</a>
	<div>

</body>
</html>

               


