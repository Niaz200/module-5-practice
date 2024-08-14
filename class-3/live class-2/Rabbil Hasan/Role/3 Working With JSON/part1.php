<?php


header('Content-Type: application/json');

// code1:

/*

header('Content-Type: application/json');


$AsocArray=['name'=>'Jhon','age'=>30];
$JSON=json_encode($AsocArray);

echo $JSON;


*/

//code2:



header('Content-Type: application/json');

$AsocArray=[
    ['name'=>'Jhon','age'=>30],
    ['name'=>'Jhon','age'=>30],
    ['name'=>'Jhon','age'=>30],
];
    
$JSON=json_encode($AsocArray);

echo $JSON;



