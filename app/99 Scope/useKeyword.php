<?php
// Use Keyword
$name = "Dino";

$hello = function () use ($name) {
    echo $name;
};

echo $name; // Dino

$name = "Harrison";

echo $name; // Harrison
$hello();   // Dino

var_dump("Next");

// Example of argument and use keyword
$name1 = "Dino";
$name2 = "Harrison";

$closure = function($greeting) use($name1) {
    global $name2;

    echo $greeting . " " . $name1 . " and " . $name2 . "<br>";
};

$closure("Hello there");

$name1 = "Amy";
$name2 = "Steve";

$closure("Hi there");