<?php
/**
 * ROOT/
 *   CoolCars/
 *     Lamborghini.php
 *     Car.php
 *     ...
 * 69 Defining Namespaces.php
 */

use CoolCars\Lamborghini;

// Defining Namespaces
require_once("Lamborghini.php");

$lamborghini = new Lamborghini(1999, "Lamborghini", "Murcielago", "1234");
echo $lamborghini->get_year_make_and_model();