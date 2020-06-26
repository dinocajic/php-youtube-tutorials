<?php
// Final Keyword
// $obj = new Class($x, $y, $z) extends ClassName {  };
require_once("Car.php");
require_once("LamborghiniKnockoff.php");
require_once("Driver.php");

$harrison = new Driver( new LamborghiniKnockoff(1999, "Lamborghini", "Diablo SV") );
$harrison->drive();