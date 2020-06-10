<?php
// Anonymous Functions

function function_name($parameter_name) {
    // body
}

$stuff_dogs_say = function() {
    echo "Dog says Cats Suck<br>";
};

$stuff_dogs_say();

$stuff_dogs_say_two = function( $saying ) {
    echo $saying;
};

$stuff_dogs_say_two( "Cats Stink<br>" );

function stuff_cats_say() {
    return function() {
        echo "Dogs Suck";
    };
}

$cats = stuff_cats_say();
$cats();