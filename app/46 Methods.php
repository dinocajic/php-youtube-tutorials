<?php
// Methods
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

    public function walk() {
        echo "I'm walking";
    }

    public function bark() {
        echo "I'm barking";
    }

    public function sleep( $energy_level = 100 ) {
        if ( $energy_level < 40 ) {
            echo "I'm sleeping";
        } else {
            echo "I don't want to sleep";
        }
    }
}

$dog = new Dog();
$dog->walk();
$dog->bark();
$dog->sleep();
$dog->sleep(20);

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

    public function turnOn() {
        echo "I'm on";
    }

    public function turnOff() {
        echo "I'm off";
    }

    public function drive( $is_car_on = false ) {
        if ( $is_car_on ) {
            echo "I'm driving";
        } else {
            echo "You gotta turn me on";
        }
    }
}

echo "<br>";

$lamborghini = new Car();
$lamborghini->color = "Black";
$lamborghini->make = "Lamborghini";
$lamborghini->model = "Diablo";

$lamborghini->turnOn();
$lamborghini->turnOff();
$lamborghini->drive();
$lamborghini->drive( true );