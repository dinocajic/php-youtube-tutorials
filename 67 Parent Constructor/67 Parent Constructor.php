<?php
// Parent Constructor
require_once("Lamborghini.php");

$lamborghini = new Lamborghini(1999, "Lamborghini", "Diablo SV", "0x4225sdf4");

echo $lamborghini->get_year_make_and_model() . " " . $lamborghini->getSecretCode();
