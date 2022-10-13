<?php
// Class Properties

class Dog {

    public $eye_color = "Brown";
    public $dob = "January 30, 2017";
    public $does_shed = true;
    public $kingdom = "Animalia";
    public $phylum = "Mammalia";
    public $class = "Mammalia";
    public $order = "Carnivara";
    public $family = "Canidae";
    public $genus = "Canis";
    public $species = "Canis Lupus";
    public $subspecies = "Canis Lupus Familiaris";
    public $breed = "German Shepherd Dog";
    public $fur_color = "Black and Tan";
}

$gs_dog = new Dog();

echo $gs_dog->dob;
echo "<br>";

echo $gs_dog->fur_color;
echo "<br>";

$gs_dog->fur_color = "Black";
echo $gs_dog->fur_color;

echo "<br>";

class Car {

    public string $color;
    public string $make;
    public string $model;
    public int $year;
    public int $fuel_type = 93;
    public int $hp;
    public int $tq;
    public string $transmission = "6 Speed Manual";
    public string $vehicle_type = "Coupe";
    public float $exterior_height;
    public float $exterior_width;
    public float $exterior_length;
    public string $exterior_um = "in";
    public float $weight;
    public string $weight_um = "lbs";
}

$lamborghini = new Car();
$lamborghini->color = "Black";
$lamborghini->make = "Lamborghini";
$lamborghini->model = "Diablo";
$lamborghini->year = 1998;
$lamborghini->hp = 518;
$lamborghini->tq = 427;
$lamborghini->exterior_height = 43.5;
$lamborghini->exterior_width = 80.3;
$lamborghini->exterior_length = 177.4;
$lamborghini->weight = 3474;

echo "<br>";

echo $lamborghini->make . " " . $lamborghini->model . ". " .
    " HP: " . $lamborghini->hp . ". Weight: " . $lamborghini->weight . " " .
    $lamborghini->weight_um;

var_dump( $lamborghini );

//$lamborghini->fuel_type = "89";
$lamborghini->fuel_type = "Dino";

var_dump( $lamborghini );