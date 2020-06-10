<?php
// Destructor
class GermanShepherd {

    const HAS_HEART = true;
    const HAS_TAIL = true;

    public $eye_color;
    public $dob;
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
    public $fur_color;

    public function __construct( string $eye_color,
                                 string $dob,
                                 string $fur_color )
    {
        $this->eye_color = $eye_color;
        $this->dob = $dob;
        $this->fur_color = $fur_color;
    }

    public function walk() {
        echo "I'm walking";
    }

    public function bark() {
        echo "I'm barking";
    }

    public function sleep( int $energy_level = 100 ) {
        if ( $energy_level < 40 ) {
            echo "I'm sleeping";
        } else {
            echo "I don't want to sleep";
        }
    }

    public function get_eye_color(): string
    {
        return $this->eye_color;
    }

    public function does_shed(): string
    {
        return ( $this->does_shed ) ? "Yes" : "No";
    }

    public function get_scientific_classification(): array
    {
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

    public function __destruct()
    {
        var_dump(
            [
                "eye_color" => $this->eye_color,
                "dob" => $this->dob,
                "does_shed" => $this->does_shed = true,
                "kingdom" => $this->kingdom = "Animalia",
                "phylum" => $this->phylum = "Chordata",
                "class" => $this->class = "Mammalia",
                "order" => $this->order = "Carnivara",
                "family" => $this->family = "Canidae",
                "genus" => $this->genus = "Canis",
                "species" => $this->species = "Canis Lupus",
                "subspecies" => $this->subspecies = "Canis Lupus Familiaris",
                "breed" => $this->breed = "German Shepherd Dog",
                "fur_color" => $this->fur_color,
            ]
        );
    }
}

$gs_dog = new GermanShepherd( "Brown", "Jan 02, 2012", "Black" );
$gs_dog->bark();

// Car Class
class Car {

    const HAS_HEADLIGHTS = true;
    const HAS_TAIL_LIGHTS = true;
    const HAS_TURN_SIGNALS = true;

    public string $color;
    public string $make;
    public string $model;
    public int $year;
    public int $fuel_type;
    public int $hp;
    public int $tq;
    public string $transmission;
    public string $vehicle_type;
    public float $exterior_height;
    public float $exterior_width;
    public float $exterior_length;
    public string $exterior_um;
    public float $weight;
    public string $weight_um;
    public bool $car_on;

    public function __construct( int $year,
                                 string $make,
                                 string $model,
                                 string $color = "",
                                 int $fuel_type = 93,
                                 int $hp = -1,
                                 int $tq = -1,
                                 string $transmission = "5 Speed Manual",
                                 string $vehicle_type = "",
                                 float $exterior_height = -1,
                                 float $exterior_width = -1,
                                 float $exterior_length = -1,
                                 string $exterior_um = "in",
                                 float $weight = -1,
                                 string $weight_um = "lbs",
                                 bool $car_on = false
    )
    {
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->fuel_type = $fuel_type;
        $this->hp = $hp;
        $this->tq = $tq;
        $this->transmission = $transmission;
        $this->vehicle_type = $vehicle_type;
        $this->exterior_height = $exterior_height;
        $this->exterior_width = $exterior_width;
        $this->exterior_length = $exterior_length;
        $this->exterior_um = $exterior_um;
        $this->weight = $weight;
        $this->weight_um = $weight_um;
        $this->car_on = $car_on;

        echo "Connection Successfully Established";
    }

    public function turnOn(): string
    {
        if ( $this->car_on ) {
            return "The " . $this->get_make_and_model() . " is already on.";
        }

        $this->car_on = true;
        return $this->get_make_and_model() . " has been turned on.";
    }

    public function turnOff(): string
    {
        if ( $this->car_on ) {
            $this->car_on = false;
            return "The " . $this->get_make_and_model() . " has been turned off.";
        }

        return "The " . $this->get_make_and_model() . " is already off.";
    }

    public function drive(): string
    {
        if ( $this->car_on ) {
            return "I'm driving";
        } else {
            return "You gotta turn me on";
        }
    }

    public function get_make_and_model(): string
    {
        return $this->make . " " . $this->model;
    }

    public function get_car_details(): array
    {
        return [
            "year" => $this->year,
            "make" => $this->make,
            "model" => $this->model,
            "color" => $this->color,
            "fuel_type" => $this->fuel_type,
            "hp" => $this->hp,
            "torque" => $this->tq,
            "transmission" => $this->transmission
        ];
    }

    public function __destruct()
    {
        echo "Connection Successfully Closed";
    }
}

echo "<br>";

$mitsubishi = new Car(2014, "Mitsubishi", "EVO");
echo $mitsubishi->get_make_and_model();