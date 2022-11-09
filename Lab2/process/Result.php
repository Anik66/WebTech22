<?php
$isValid=1;

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["First-name"]=="")
    {
        echo " Firstname is required"; echo"<br>";
      
    }
    else{
        echo $_REQUEST["First-name"];echo"<br>";
        $isValid=1;
    }

    if($_REQUEST["Last-name"]=="")
      {
        echo " Lasttname is required";echo"<br>";
          
      }
    else{
        echo $_REQUEST["Last-name"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["password"]=="")
    {
        echo "Password is required";echo"<br>";
      
    }
    else{
        echo $_REQUEST["password"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["Confirm-password"]=="")
    {
        echo "Confirm password is required";echo"<br>";
        
    }
    elseif($_REQUEST["Confirm-password"]==$_REQUEST["password"]){
        echo "Your password: ",$_REQUEST["Confirm-password"];
    }
    else{
        echo "Your password should be same";echo"<br>";
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
    if($_REQUEST["age"]=="")
    {
        echo " Doctor age is required";echo"<br>";
    }
    else{
        echo $_REQUEST["age"];echo"<br>";   
        $isValid=1; 
    }
}



if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["department"]=="")
    {
        echo " Department name is required";echo"<br>";
        
    }
    else{
        echo $_REQUEST["department"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["position"]=="")
    {
        echo " Doctor Position is required";echo"<br>";

    }
    else{
        echo $_REQUEST["position"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["date"]=="")
    {
        echo " checkup Date is required";echo"<br>";
    
    }
    else{
        echo $_REQUEST["date"];echo"<br>";
        $isValid=1;
    }
}
 
if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["email"]=="")
    {
        echo " Email Id is required";echo"<br>";
    
    }
    else{
        echo $_REQUEST["email"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    $target_dir = "../File/";
    $target_file = $target_dir . $_FILES["fileToUpload"]["name"];

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $_FILES["fileToUpload"]["name"]. " has been uploaded.";
        $fileupload = $_FILES["fileToUpload"]["type"];echo"<br>";
        $isValid=1;
    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["number"]=="")
    {
        echo " mobile number is required";echo"<br>";
    
    }
    else{
        echo $_REQUEST["number"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["address"]=="")
    {
        echo " Address is required";echo"<br>";
    }
    else{
        echo $_REQUEST["address"];echo"<br>";
        $isValid=1;
    }
}


if(isset($_REQUEST["submit"]))
{
    $checkboxvalue=array();
    $checkbox=0;
    if(isset($_REQUEST["Dhaka"]))
    {
        if($_REQUEST["Dhaka"]=="Dhaka"){
            echo "you clicked",$_REQUEST["Dhaka"];
            echo"<br>";
            $checkbox=1;
            array_push($checkboxvalue,$_REQUEST["Dhaka"]);
        }
        else{
            echo "not checked";
        }
    }
    
    if(isset($_REQUEST["Chittagong"]))
    {
        if($_REQUEST["Chittagong"]=="Chittagong"){
            echo "you clicked",$_REQUEST["Chittagong"];
            echo"<br>";
            $checkbox=1;
            array_push($checkboxvalue,$_REQUEST["Chittagong"]);
        }
    }
    
    if(isset($_REQUEST["Rajshahi"]))
    {
        if($_REQUEST["Rajshahi"]=="Rajshahi"){
            echo "you clicked",$_REQUEST["Rajshahi"];
            echo"<br>";
            $checkbox=1;
            array_push($checkboxvalue,$_REQUEST["Rajshahi"]);
        }
    }
    
    if(isset($_REQUEST["Khulna"]))
    {
        if($_REQUEST["Khulna"]=="Khulna"){
            echo "you clicked",$_REQUEST["Khulna"];
            echo"<br>";
            $checkbox=1;
            array_push($checkboxvalue,$_REQUEST["Khulna"]);
        }
    }

    if($checkbox==0){
        echo "checkbox is not checked";
        echo"<br>";
    }
    
    

    if($isValid==1){
        $Regdata=array(
            'first name'        =>$_REQUEST["First-name"],
            'last name'         =>$_REQUEST["Last-name"],
            'password'          =>$_REQUEST['Confirm-password'],
            'gender'            =>$_REQUEST['gender'],
            'age   '            =>$_REQUEST['age'],
            'department'        =>$_REQUEST['department'],
            'address'           =>$_REQUEST['address'],
            'position'          =>$_REQUEST['position'],
            'date'              =>$_REQUEST['date'],
            'email'             =>$_REQUEST['email'],
            'Fileupload'        =>$fileupload,
            'number'            =>$_REQUEST['number'],  
            'address'           =>$_REQUEST['address'], 
            'chamber'           =>$checkboxvalue
        );

       
        $tempdata = json_decode(file_get_contents('../Data/data.json'));
        $tempdata[] =$Regdata;

        
        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
        
       
        if(file_put_contents("../Data/data.json", $jsondata)) {
            echo "Data successfully saved <br>";
        }
        else{
            echo "no data saved";
        }

        $data = file_get_contents("../Data/data.json");
        $mydata = json_decode($data);
    }
}

?>