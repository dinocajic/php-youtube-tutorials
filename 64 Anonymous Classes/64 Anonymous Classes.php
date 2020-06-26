<?php
// Anonymous Classes
// $obj = new Class($x, $y, $z) extends ClassName {  };
require_once("Car.php");
require_once("Driver.php");

$dino = new Driver( new Class(1996, "Ferrari", "F355") extends Car {} );
$dino->drive();

$harrison = new Driver( new Class(1999, "Lamborghini", "Diablo SV") extends Car {} );
$harrison->drive();