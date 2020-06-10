<?php
// Simple Arrays
$employee_ids_that_are_awesome = array(1, 2, 3, 5, 10, 20);
$drivers_i_hate = array(
    'Drivers that turn their blinker on before checking to see if anyone is next to them.',
    'Drivers that do the speed limit or below in the left 2 lanes',
    'Drivers that are clearly on their phones'
);
echo "<div>" . $drivers_i_hate[0] . "</div>";
echo "<div>" . $drivers_i_hate[2] . "</div>";
echo "<div>" . count( $drivers_i_hate ) . "</div>";
echo "<div>" . sizeof( $drivers_i_hate ) . "</div>";
$last_index = count( $drivers_i_hate ) - 1; // 2
echo "<div>" . $drivers_i_hate[ $last_index ] . "</div>";
echo "<div>" . $drivers_i_hate[ count( $drivers_i_hate ) - 1 ] . "</div>";

$people_i_hate = [
    "People that don't know what to order at a fast food restaurant",
    "The waiter that ignores us for most of the time",
    "The waiter that just won't leave us alone",
    "People that blast their music on their phone speaker in public"
];

echo "<div>" . $people_i_hate[0] . "</div>";

$person = [
    'Dino Cajic',
    32,
    '111-11-1111',
    'dinocajic@gmail.com',
    42.5, // fav decimal
    true // is awesome
];

echo "<pre>";
var_dump( $person );
echo "</pre>";

$person[6] = "Author";
$person[] = "An Illustrative Introduction to Algorithms";

echo "<div>" . sizeof( $person ) . "</div>";

$person[26] = "https://medium.com/@dinocajic";

var_dump( $person );

echo "<div>" . sizeof( $person ) . "</div>";

$person[1] = 33;

var_dump( $person );

unset($person[26]);

var_dump($person);

$person[] = "https://medium.com/@dinocajic";

var_dump( $person );
