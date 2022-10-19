<?php
// Callback Functions

function add_one_to_x( $x ) {
    echo $x + 1;
}

add_one_to_x( 5 );

function cat_says() {
    echo "Dogs suck";
}

function animal_says( $animal_type, $animal_function ) {
    echo $animal_type . " says ";
    call_user_func( $animal_function );
}

animal_says( "Cat", "cat_says" );

function dog_says( $dog_saying ) {
    echo $dog_saying;
}

function animal_says_two( $animal_type, $animal_function, $saying ) {
    echo $animal_type . " says: ";
    call_user_func( $animal_function, $saying );
}

animal_says_two( "Dog", "dog_says", "Cats suck" );

function animal_says_three( $animal_type, $animal_function, $saying ) {
    echo $animal_type . " says: ";
    $animal_function( $saying );
}

animal_says_three( "Dog", "dog_says", "Cats suck again" );

function animal_says_four( $animal_type, $callback, $saying ) {
    /**
     * $callback = function( $dog_says ) { echo $dog_says; }
     * $callback( $saying );
     */
    echo $animal_type . " says: ";
    $callback( $saying );
}

animal_says_four( "Dog", "dog_says", "Let me out" );

animal_says_four(
    "Dog",
    function( $dog_says ) {
        echo $dog_says;
    },
    "Leave me alone"
);
///**
// * 1. Dog string is passed as an argument to animal_says_four
// * 2. Anonymous Function is assigned to $callback parameter
// */

function animal_says_five( $animal_type, $callback, $saying ) {
    echo $animal_type . " says: ";
    echo $callback( $saying );
}

animal_says_five("Dog", fn( $saying ) => $saying, "Leave me alone 2");