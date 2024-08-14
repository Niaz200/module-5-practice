<?php

// code1:
/*

$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];

$data['gender'] = 'Male';

print_r($data);

*/

//code2:


$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];

$encoded = json_encode( $data );
print_r( $encoded );

$decoded = json_decode( $encoded, true );

// print_r($decoded);
print_r( $decoded['name'] );



