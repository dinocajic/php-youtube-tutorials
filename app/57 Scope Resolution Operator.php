<?php
// Scope Resolution Operator - Double Colon ::
require_once("GermanShepherd.php");
require_once("Car.php");
$gs_dog = new GermanShepherd("Brown", "Jan 10, 2018", "Black");
var_dump( $gs_dog::HAS_HEART );
echo $gs_dog->walk();
$gs_dog->bark();

var_dump( Car::HAS_TAIL_LIGHTS );