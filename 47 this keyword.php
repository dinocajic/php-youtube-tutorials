<?php
// What you know about $this?
class GermanShepherd {

    const HAS_HEART = true;
    const HAS_TAIL = true;

    public $eye_color = "Brown";
    public $dob = "January 30, 2017";
    public $does_shed = true;
    public $kingdom = "Animalia";
    public $phylum = "Chordata";
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

    public function get_eye_color() {
        return $this->eye_color;
    }

    public function does_shed() {
        return ( $this->does_shed ) ? "Yes" : "No";
    }

    public function get_scientific_classification() {
        return [
            "kingdom" => $this->kingdom,
            "phylum" => $this->phylum,
            "class" => $this->class,
            "order" => $this->order,
            "family" => $this->family,
            "genus" => $this->genus,
            "species" => $this->species,
            "subspecies" => $this->subspecies,
            "breed" => $this->breed
        ];
    }
}

$gs_dog = new GermanShepherd();
echo $gs_dog->get_eye_color() . "<br>";
echo "Does the German Shepherd Shed? " . $gs_dog->does_shed() . "<br>";

var_dump( $gs_dog->get_scientific_classification() );

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

    public bool $car_on = false;

    public function turnOn() {
        if ( $this->car_on ) {
            return "The " . $this->get_make_and_model() . " is already on.";
        }

        $this->car_on = true;
        return $this->get_make_and_model() . " has been turned on.";
    }

    public function turnOff() {
        if ( $this->car_on ) {
            $this->car_on = false;
            return "The " . $this->get_make_and_model() . " has been turned off.";
        }

        return "The " . $this->get_make_and_model() . " is already off.";
    }

    public function drive() {
        if ( $this->car_on ) {
            return "I'm driving";
        } else {
            return "You gotta turn me on";
        }
    }

    public function get_make_and_model() {
        return $this->make . " " . $this->model;
    }
}

$subaru = new Car();
$subaru->make = "Subaru";
$subaru->model = "WRX STi";

echo "Car: "      . $subaru->get_make_and_model() . "<br>";
echo "Drive: "    . $subaru->drive() . "<br>";
echo "Turn On: "  . $subaru->turnOn() . "<br>";
echo "Drive: "    . $subaru->drive() . "<br>";
echo "Turn On: "  . $subaru->turnOn() . "<br>";
echo "Turn Off: " . $subaru->turnOff() . "<br>";
echo "Drive: "    . $subaru->drive() . "<br>";
echo "Turn Off: " . $subaru->turnOff() . "<br>";