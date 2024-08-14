<?php

// session_name('php');

// session_start([
//     'name' => 'php',
// ]);

//code1:

/*

session_start([
    'name' => 'php',
]);

var_dump($_SESSION);

//Session Value set

$_SESSION['name'] = 'Prince';
$_SESSION['age'] = 30;

print_r($_SESSION);

//Session Value Get

echo $_SESSION['name'];


//Session Destroy

session_destroy();

//Session unset

session_unset();


*/


//code2:

session_start([
    'name' => 'php',
    'cookie_lifetime' => 15,
]);


$_SESSION['name'] = 'Prince';

echo $_SESSION['name'];