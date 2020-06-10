<?php
// Array Operators

$birds = [ 'Scarlet Macaw', 'White Cockatoo', 'Buff-faced Pygmy Parrot' ];
$big_cats = [ 'Tiger', 'Lion', 'Cheetah', 'Puma' ];

$animals = $birds + $big_cats;

var_dump( $animals );

$fav_animals = array_merge($birds, $big_cats);
var_dump($fav_animals);

$car_1 = [
    'year' => 2003,
    'make' => 'Chevy',
    'model' => 'Corvette'
];

$car_2 = [
    'year' => '2003',
    'make' => 'Chevy',
    'model' => 'Corvette'
];

var_dump( $car_1 == $car_2 );
var_dump( $car_1 === $car_2 );

var_dump( $car_1 != $car_2 );
var_dump( $car_1 !== $car_2 );