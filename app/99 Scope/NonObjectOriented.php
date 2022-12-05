<?php

function hello() {
    $name = "Dino";
    echo "Hello " . $name; // has access
}


//function bye() {
//    echo "Bye " . $name; // Doesn't have access
//}

// Calling a global variable
$x = "Hey";

function hey() {
    echo "Hey";
}

echo $x; // works well

// Calling a Global Variable inside  a function.
$x = "Hey";
// Commented out since it will cause an error
//function heyYou() {
//    echo $x; // Doesn't work since it's looking for a local var
//}