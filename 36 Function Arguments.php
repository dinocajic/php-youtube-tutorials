<?php
// Function arguments
function function_name( $parameter_1, $parameter_2 ) {
    // Function body
}

function_name("Subscribe", "Please");

function plant($type_of_plant) {
    echo "I'm an " . $type_of_plant . " plant<br>";
}

plant("Automotive");
plant("Vegetable");

function plant_two( $type_of_plant = "Automotive" ) {
    echo "I'm a(n) " . $type_of_plant . " plant<br>";
}

plant_two();
plant_two("Subaru");

function car( $brand, $model, $transmission = "Manual" ) {
    echo "You just bought a " . $brand . " " . $model . " in a(n) " .
        $transmission . " transmission<br>";
}

car( "Subaru", "WRX STi" );
car( "Jeep", "Wrangler", "Automatic" );

function do_secret_calculation( $secret_num_one, $secret_num_two ) {

    $x = $secret_num_one * 19;
    $y = $secret_num_two * 34;

    $z = $x + $secret_num_one - $secret_num_two + $y;

    if ( $z >= 0 ) {
        echo "You got the correct numbers<br>";
    } else {
        echo "You have the wrong numbers<br>";
    }
}

do_secret_calculation(20, 2);
do_secret_calculation(3, -30);