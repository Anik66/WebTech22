<?php
    include("../process/patientresult.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	
	 
	<form action="" method="post" enctype="multipart/form-data">
			
		<table >
		<h1>Check Up</h1>
        <img src="../image/patient.jpg" alt="welcome" width="300" height="200">
           
        <tr >
				<td for="name">Enter Patient Name </td>
				
				<td><input type="name" name="name" placeholder= "Enter Patient Name" ></td>
			</tr>

			<tr >
				<td for="time">Check up  time </td>
				
				<td><input type="time" name="time" placeholder= "Enter check up time" ></td>
			</tr>
            <tr>
                <td for="duration"> Check up  duration</td>
                <td>
                    <input type="text" name="duration" placeholder=" Enter check up  duration">
                </td>
            </tr>	

            	

            <tr>
                <td for="problem"> Patient problem</td>
                <td>
                    <input type="Text" name="problem" placeholder=" Enter Patient problem ">
                </td>
            </tr>

            <tr>
                <td for="age">Age</td>
                <td>
                    <input type="text" name="age" placeholder="Enter Patient age">
                </td>
            </tr>

            <tr>
                <td for="gender">Gender</td>

                <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">other
                </td>
               
            </tr>

            <tr>
                <td for="payment">paymentPayment Method</td>
                <td>
                    <input type="radio" name="payment" value="Bkash">Bkash
                    <input type="radio" name="payment" value="Nogod">Nogod
                    <input type="radio" name="payment" value="Visa-card">visa card
                </td>
            </tr>


            <tr>
                <td for="email"> Patient E-mail</td>
                <td>
                    <input type="text" name="email" placeholder="Enter Patient E-mail">
                </td>
            </tr>

            <tr>
                <td for="number">Patient Mobile Number</td>
                <td>
                    <input type="text" name="number" placeholder="Enter patient mobile number">
                </td>
            </tr>



            
            


		</table>
	
		<input type="submit" name="submit" value="submit">
		<br>

		
		<a href="Home.php">Back to home</a>
        <a href="./process.Footer.php"></a>
		

	
		
			
	</form>		

	<br>
    <div>
		<?php include 'Footer.php';?>
	</div>

	

</body>
</html>


