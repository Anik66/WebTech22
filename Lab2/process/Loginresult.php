
<?php

if(isset($_REQUEST["submit"])){
  if(isset($_REQUEST["name"])||(isset($_REQUEST["password"])))
    {

      $logData = file_get_contents("../Data/data.json");
      $logindata = json_decode($logData);

      foreach($logindata as $myjsonobject)
      {
        if($myjsonobject->Username==$_REQUEST["name"] && ($myjsonobject->Password == $_REQUEST["password"]))
        { 
          echo "You have Successfully logged in";
          return;
        }
        }
        echo "Error in username or Password. Please try again.";
      }
      
    }
    
      
     
    
?>