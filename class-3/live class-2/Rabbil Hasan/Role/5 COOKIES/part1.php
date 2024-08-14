<?php

//code1:

// Take Data From Client & Set Cookie



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    setcookie("user_name",$PHPAsocArray['username'],[
        "expires"=>time()+3600,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>'Lax'
    ]);

    echo "set cookie success";
}





//code2:

//for browser

/*

if($_SERVER["REQUEST_METHOD"]=="GET"){

   // $StringData=file_get_contents("php://input");

   // $PHPAsocArray=json_decode($StringData,true);

    setcookie("user_name","Rabbil",[
        "expires"=>time()+3600,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>'Lax'
    ]);

    echo "set cookie success";
}

*/

//code3:

//Read Cookie

if($_SERVER["REQUEST_METHOD"]=="GET"){

  echo $_COOKIE["user_name"];
  
 }


 //code4:

//Destroy Cookie  From Request


if($_SERVER["REQUEST_METHOD"]=="DELETE"){

    setcookie("user_name","",[
        "expires"=>time()-3600,
        "path"=>"/",
        "domain"=>"localhost",
      
    ]);


    echo "delete success";
    
   }
