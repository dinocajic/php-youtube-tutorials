<?php
// Arrow Functions

$stuff_dogs_say = function() {
    echo "Dog says Cats Suck<br>";
};

$stuff_dogs_say();

$stuff_dogs_say_two = fn() => "Cats Suck<br>";

echo $stuff_dogs_say_two();

$stuff_dogs_say_three = fn($saying) => "Dogs say " . $saying . "<br>";

echo $stuff_dogs_say_three("Let Me Out");

$y = 1;

$add = fn($x) => $x + $y;

echo $add(2);

$add_two = function($x) use ($y) {
    return $x + $y;
};

echo $add_two(5);