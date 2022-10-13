<?php
// Continue
$next_car = [
    "Porsche 911",
    "Ferrari F355",
    "Mitsubishi EVO",
    "R34 Skyline",
    "C8 Corvette"
];

echo "While Loop<br>";

$i = 0;

while ( $i < count($next_car) ) {

    if ( $next_car[$i++] != "R34 Skyline" ) {
        echo $i;
        continue;
    }

    echo "That's right. I'm getting a skyline.<br>";
}

echo "Do While Loop<br>";

$i = 0;

do {
    if ( $next_car[$i++] != "R34 Skyline" ) {
        echo $i;
        continue;
    }

    echo "That's right. I'm getting a skyline.<br>";
} while( $i < count($next_car) );

$next_car = [
    "Porsche 911",
    "Subaru STi",
    "Ferrari F355",
    "Mitsubishi EVO",
    "R34 Skyline",
    "C8 Corvette"
];

echo "For Loop<br>";

for ( $i = 0; $i < count($next_car); $i++ ) {

    if ( $next_car[$i] == "Subaru STi" ) {
        continue;
    }

    echo "The " . $next_car[$i] . " is definitely a possibility...with enough subscribers.<br>";
}

echo "Foreach Loop<br>";

foreach( $next_car as $car ) {

    if ( $car == "Subaru STi" ) {
        continue;
    }

    echo "The " . $car . " is definitely a possibility...with enough subscribers.<br>";
}