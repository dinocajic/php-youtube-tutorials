<?php
// Class Constants

class Dog {

    const HAS_HEART = true;
    const HAS_TAIL = true;

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

var_dump( Dog::HAS_HEART );

class Car {

    const HAS_HEADLIGHTS = true;
    const HAS_TAIL_LIGHTS = true;
    const HAS_TURN_SIGNALS = true;

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

echo "This vehicle is " . ((Car::HAS_HEADLIGHTS) ? "a car.": "is not a car.");