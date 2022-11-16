<?php
class db
{

function openCon(){
    $conn=new mysqli("localhost","root","","Doctor");
    return $conn;

}

function insertuser($conn,$tablename,$fname,$lname,$password,$gender,$age,$department,$doctorposition,$dateofbirth,$email,$file,$munmber,$adress)
{
    $sql="INSERT INTO $tablename(fname,lname,password,gender,age,department,doctorposition,dateofbirth,email,file,munmber,adress) VALUES
    ('$fname','$lname''$password','$gender','$age','$department','$doctorposition','$dateofbirth,''$email','$file','$munmber','$adress')";


if($conn->query($sql)===TRUE)
{
    echo "data inserted";
}

else{
    echo"error occurred".$conn->error;
}

function checkUser($conn,$tablename,$fname,$password){
    $sql="SELECT * FROM $tablename WHERE name'$fname' AND password= 'password' ";
    $result=$conn->query($sql);
    if($result->num_row>0)
    {
        return true;
    }
    else{
        return false;

    }
}

function showAll($conn,$tablename){
    $sql="select*FROM $tablename";
    $result=$conn->query($sql);
    return $result;
}

function closeCon($conn)
{
    $conn->close();
}
}
}

?>
