<?php
/**
 * ROOT/
 *   Vehicles/
 *     Vehicle (Class)
 *     Cars/
 *       Car (Class)
 *       CarParts/
 *         Engine (Class)
 *         Transmission (Class)
 *       ExoticCars/
 *         Lamborghini (Class)
 *         Ferrari (Class)
 *       Drivers/
 *         Driver (Class)
 */

use Vehicles\Cars\ExoticCars\Lamborghini;
use Vehicles\Cars\ExoticCars\KnockOffs\Lamborghini as KnockOff;

// Defining Sub-namespaces
require_once("Lamborghini.php");
require_once("Lamborghini_Two.php");

$lamborghini = new Lamborghini(1999, "Lamborghini", "Murcielago", "1234");
echo $lamborghini->get_year_make_and_model();

$lamborghini = new KnockOff(1999, "Lamborghini", "Murcielago", "1234");
echo $lamborghini->get_year_make_and_model();