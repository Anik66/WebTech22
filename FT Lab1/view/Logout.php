<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "Logged out successfully";
 
    session_start();
    session_destroy();
 
?>
 <p><a href="Home.php">Back to home</a></p>
</body>


</html>