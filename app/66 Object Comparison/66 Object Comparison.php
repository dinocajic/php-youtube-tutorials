<?php
// Object Comparison
require_once("Car.php");
require_once("Lamborghini.php");
require_once("Ferrari.php");

$lamborghini_1 = new Lamborghini(1999, "Lamborghini", "Diablo");
$lamborghini_2 = new Lamborghini(1999, "Lamborghini", "Diablo");

$lamborghini_3 = $lamborghini_2;

var_dump( $lamborghini_1 == $lamborghini_1 );
var_dump( $lamborghini_1 === $lamborghini_1 );
var_dump( $lamborghini_1 == $lamborghini_2 );
var_dump( $lamborghini_1 === $lamborghini_2 );
var_dump( $lamborghini_2 === $lamborghini_3 );

$lamborghini_3->setYear(1998);
var_dump( $lamborghini_2->getYear() );

$ferrari = new Ferrari(1999, "Lamborghini", "Diablo");

var_dump( $lamborghini_1 == $ferrari );