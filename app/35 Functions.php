<?php
// User Defined Functions

function function_name() {
    // function body
}

function automotive_plant() {
    echo "I'm an auto plant<br>";
}

automotive_plant();

function plant() {
    $type_of_plant = "automotive";

    echo "I'm an " . $type_of_plant . " plant<br>";
}

plant();
plant();

function sayName() {
    echo "My name is Dino";
}

function state_yourself() {
    echo "Hi I am a robot from the future. ";
    sayName();
}

state_yourself();