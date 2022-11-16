<?php
include("../Model/db.php");
$mydb=new database();
$conObj=$mydb->openCon();
$result=$mydb->showAll($conn,"Doctor");
if($result->num_rows>0)
{
    echo "<table>";

    foreach($result as $row)
    {
        echo "<tr>FirstNAme<td>" .$row["fname"]. "</tr></td>";
        echo  $row["fname"];
        echo  $row["lname"];
        echo  $row["password"];
        echo  $row["age"];
        echo  $row["gender"];
        echo  $row["department"];
        echo  $row["doctorposition"];
        echo  $row["Date of birth"];
        echo  $row["email"];
        echo  $row["no"];
        echo  $row["eno"];

    


    }
    echo "</table>";

}
?>