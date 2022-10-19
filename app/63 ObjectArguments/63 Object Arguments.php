<?php
// Object Arguments
require_once("Lamborghini.php");
require_once("Ferrari.php");
require_once("Driver.php");

$lamborghini_diablo = new Lamborghini(1999, "Lamborghini", "Diablo");
$ferrari_f355 = new Ferrari(1996, "Ferrari", "F355");

$dino = new Driver( $ferrari_f355 );
$dino->drive();

$harrison = new Driver( $lamborghini_diablo );
$harrison->drive();
//$dino->drive( $ferrari_f355 );