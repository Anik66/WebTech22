<?php
    include("../process/Result.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <h1 > Doctors Registration Form</h1>
            <img src="../image/logo.jpg" alt="Doctor" width="300" height="200">

            <tr>
                <td for="name">Doctor First name</td>
                <td>
                    <input type="text" name="First-name" placeholder="Enter  doctor First name">
                </td>
            </tr>

            <tr>
                <td for="name">Doctor Last name</td>

                <td>
                    <input type="text" name="Last-name" placeholder="Enter  doctor Last name">
                </td>
            </tr>



            <tr>
                <td for="password"> Password</td>

                <td>
                    <input type="text" name="password" placeholder="Enter new password">
                </td>
            </tr>

            <tr>
                <td for="password">Confirm password</td>

                <td>
                    <input type="text" name="Confirm-password" placeholder="Confirm password">
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
                <td for="age">Age</td>
                <td>
                    <input type="text" name="age" placeholder="Enter Doctor age">
                </td>
            </tr>


            <tr>
                <td for="department">Department</td>
                <td>
                    <input type="text" name="department" placeholder="Enter the Department">
                </td>
            </tr>


            <tr>
                <td for="position">Doctor Position</td>
                <td>
                    <input type="text"name="position" placeholder="Enter te doctor Position">
                </td>
            </tr>


            <tr>
                <td>Doctor date of birth</td>
                <td>
                    <input type="date" name="date">
                </td>
            </tr>

        
            <tr>
            <td for="email">Email Id</td>

                <td>
                    <input type="email" name="email" placeholder="Enter Doctor Email Id">
                </td>
            </tr>


            <tr>
                <td>Select file to upload:</td> 
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>


            <tr>
            <td for="number">Mobile number</td>

                <td>
                    <input type="tel" name="number" placeholder="Enter Doctor Mobile name">
                </td>
            </tr>


            <tr>
            <td for="address">Address</td>

                <td>
                    <textarea input type="text" id="address" name="address" placeholder="Patient's Address" rows="4" cols="20"></textarea>
                </td>
            </tr>


            <tr>
                <td for="Chamber">chamber</td>
                <td>
                    <input type="checkbox" id="Dhaka" name="Dhaka" value="Dhaka">Dhaka
                    <input type="checkbox" id="Chittagong" name="Chittagong" value="Chittagong">Chittagong               
                    <input type="checkbox" id="Rajshahi" name="Rajshahi" value="Rajshahi">Rajshahi
                    <input type="checkbox" id="Khulna" name="Khulna" value="Khulna">Khulna
                </td>
            </tr>


            <tr>
                <td>
                    <td>
                        <input type="submit" name="submit">
                        <input type="reset" name="reset">
                    </td>
                </td>
           </tr>
        </table>
    </form>
    <a href="Home.php">Home</a>
</body>

<div align="center">
		<?php include 'Footer.php';?>
	</div>
</html>

               