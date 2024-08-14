<?php

use app\Classes\BloodBank;
use app\Classes\VolunteerDonor;
use app\Classes\ProfessionalDonor;

include "autoloader.php";


// Instantiate objects
$donor1 = new VolunteerDonor( "Alice", "A+", 25 );
$donor2 = new VolunteerDonor( "Bob", "B-", 30 );
$donor3 = new ProfessionalDonor( "Charlie", "O+", 35 );

$bloodBank = new BloodBank();

// Receive blood from donors
$bloodBank->receivedBlood( $donor1 );
$bloodBank->receivedBlood( $donor2 );
$bloodBank->receivedBlood( $donor3 );


echo "\n";
// Display donor information and perform blood tests
$bloodBank->displayDonors();

// Get donors by blood group
echo "\nDonors with Blood Group A+:\n";
$aPlusDonors = $bloodBank->getDonorsByBloodGroup( "A+" );

foreach ( $aPlusDonors as $donor ) {
    $donor->displayDonorInfo();
}

// Demonstration of polymorphism
echo "\nPolymorphism Example:\n";
$donors = [$donor1, $donor2, $donor3];

foreach ( $donors as $donor ) {
    // donateBlood() method is being called and decided by the compiler which donor's method is needed to call based on the type of donor(Object) in runtime.
    $donor->donateBlood();
}
