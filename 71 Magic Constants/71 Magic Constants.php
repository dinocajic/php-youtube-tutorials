<?php
// MAGIC CONSTANTS
// __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __TRAIT__,
// __METHOD__, __NAMESPACE__
use MagicConstants\Vehicles\Cars\ExoticCars\Lamborghini;
use MagicConstants\Vehicles\Cars\ExoticCars\KnockOffs\Lamborghini as KnockOff;

// Defining Sub-namespaces
require_once("Lamborghini.php");

$lamborghini = new Lamborghini(1999, "Lamborghini", "Murcielago", "1234");
echo $lamborghini->get_year_make_and_model();
$lamborghini->check_engine_oil_level();