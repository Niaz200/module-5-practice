<?php

//code1:

// Take Data From Client & Store Inside Session


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    session_start();
    $_SESSION['user']=$PHPAsocArray['username'];

    echo "Session Save Success";
}



//code2:
//Tale Data from Client & Store Inside Session

if($_SERVER["REQUEST_METHOD"]=="GET"){

    session_start();
    echo $_SESSION['user'];
  
}


//code3:
//Destroy Session

if($_SERVER["REQUEST_METHOD"]=="DELETE"){

    session_start();
    session_destroy();


    echo "Delete Success";
  
}

