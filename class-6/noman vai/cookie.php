<?php

//code1:

/*

//set cookie

$name = 'name';
$value = 'Prince';

setcookie($name, $value, time() + 5);

//destroy er janno
// setcookie($name, $value, time() - 5);


*/

//code2:

$data = [
    'name' => 'John Doe',
    'age' => '30',
];


setcookie('data', json_encode($data), time() +150 );

// print_r($_COOKIE);

// print_r($_COOKIE['data']);

// print_r( json_decode($_COOKIE['data']));

print_r( json_decode($_COOKIE['data'], true));
