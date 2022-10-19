<?php
// Foreach Loop
$things_to_buy = [
    "meat shredder claws",
    "taco sleeping bag",
    "tortilla toaster",
    "the keyboard waffle iron"
];

// foreach( $array as $array_value ) { loop body }
foreach ( $things_to_buy as $value ) {
    echo $value . "<br>";
}

$cars = [
    "EVO",
    "STi",
    "Supra",
    "Skyline"
];

foreach( $cars as $car ) {
    echo $car . "<br>";
}

// foreach( $array as $key => $value ) { Loop body }
$to_do_list = [
    "Monday"    => "Eat vanilla pudding out of a mayo jar.",
    "Tuesday"   => "Photoshop waldo out of where's waldo and send them to friends.",
    "Wednesday" => "Go to the Apple store and order a Big Mac.",
    "Thursday"  => "Go to SeaWorld with a fishing pole.",
    "Friday"    => "Quit my job.",
    "Saturday"  => "Try to be more responsible.",
    "Sunday"    => "Panic because nobody's subscribing."
];

foreach ( $to_do_list as $day_in_week => $to_do_item ) {
    echo $day_in_week . ": " . $to_do_item . "<br>";
}