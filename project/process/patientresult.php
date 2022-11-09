
			<?php
$isValid=1;


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["name"]=="")
    {
        echo " Patientname is required"; echo"<br>";
      
    }
    else{
        echo $_REQUEST["name"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["time"]=="")
    {
        echo " checkup time required"; echo"<br>";
      
    }
    else{
        echo $_REQUEST["time"];echo"<br>";
        $isValid=1;
    }

    if(isset($_REQUEST["submit"]))
    {
        if($_REQUEST["duration"]=="")
        {
            echo " Duration time is required";echo"<br>";
        }
        else{
            echo $_REQUEST["duration"];echo"<br>";   
            $isValid=1; 
        }
    }
    
    if(isset($_REQUEST["submit"]))
    {
        if($_REQUEST["problem"]=="")
        {
            echo " patient problem is required";echo"<br>";
        }
        else{
            echo $_REQUEST["problem"];echo"<br>";   
            $isValid=1; 
        }
    }

    if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["age"]=="")
    {
        echo " patient age is required";echo"<br>";
    }
    else{
        echo $_REQUEST["age"];echo"<br>";   
        $isValid=1; 
    }
}
    


    
if(isset($_REQUEST["submit"]))
{
    if(isset($_REQUEST["gender"]))
    {
        if($_REQUEST["gender"]=="male")
        {
            echo "you have checked",$_REQUEST["gender"];echo"<br>";
        }
        else{
            echo "you have checked",$_REQUEST["gender"];echo"<br>";
        }
        $isValid=1;
    }
    else{
        echo "radio is not check";echo"<br>";
    }
}

if(isset($_REQUEST["submit"]))
{
    if(isset($_REQUEST["payment"]))
    {
        if($_REQUEST["payment"]=="Bkash")
        {
            echo "you have checked",$_REQUEST["payment"];echo"<br>";
        }
        else{
            echo "you have checked",$_REQUEST["payment"];echo"<br>";
        }
        $isValid=1;
    }
    else{
        echo "radio is not check";echo"<br>";
    }
}
if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["email"]=="")
    {
        echo " patient email is required";echo"<br>";
    }
    else{
        echo $_REQUEST["email"];echo"<br>";   
        $isValid=1; 
    }
}
  








if($isValid==1){
    $Regdata=array(
        'Name'             =>$_REQUEST["name"],
        'Time'              =>$_REQUEST["time"],
        'Duration'          =>$_REQUEST["duration"],
        'problem'           =>$_REQUEST['problem'],
        'age   '            =>$_REQUEST['age'],
        'gender'            =>$_REQUEST['gender'],
        'payment'           =>$_REQUEST['payment'],
        'email'             =>$_REQUEST['email'],
        'number'            =>$_REQUEST['number'],
        
    );

   
    $tempdata = json_decode(file_get_contents('../Data/pdata.json'));
    $tempdata[] =$Regdata;

    
    $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
    
   
    if(file_put_contents("../Data/pdata.json", $jsondata)) {
        echo "Data successfully saved <br>";
    }
    else{
        echo "no data saved";
    }

    $data = file_get_contents("../Data/pdata.json");
    $mydata = json_decode($data);
}
}

?>					