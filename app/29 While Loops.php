<?php
// While Loop

$best_cars_ever_made = [
    "S13 240sx",
    "Datsun 240z",
    "Mazda RX7",
    "MKIV Supra",
    "R32 GTR",
    "R34 GTR",
    "C5 Corvette",
    "C6 Corvette",
    "C8 Corvette",
    "Porsche 911",
    "Subaru STi"
];

echo $best_cars_ever_made[1];

$i = 1;

while ( $i <= 10 ) {
    echo $i . "<br>";
    $i++;
}

$i = 0;

while ( $i < 11 ) {
    echo $best_cars_ever_made[$i] . "<br>";
    $i++;
}

$i = 20;

while ( $i < count($best_cars_ever_made) ) {
    echo $best_cars_ever_made[$i++] . "<br>";
}