<?php



// code1:

/*
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "I am post method";
}

*/

// code2:

/*
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "I am GET method";
}

*/


//code3:

/*
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    print_r($PHPAsocArray);
}

*/


//code4:

/*
header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="GET"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    print_r($PHPAsocArray);
}

*/


//code5:

/*

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="GET"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    $JSON= json_encode($PHPAsocArray,true);

    echo $JSON;
}

*/

//code6:

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"]=="PUT"){

    $StringData=file_get_contents("php://input");

    $PHPAsocArray=json_decode($StringData,true);

    $JSON= json_encode($PHPAsocArray,true);

    echo $JSON;
}





