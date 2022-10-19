<?php
// Visibility

class GermanShepherd
{
    const HAS_HEART = true;
    const HAS_TAIL = true;

    private $eye_color;
    private $dob;
    private $does_shed = true;
    private $kingdom = "Animalia";
    private $phylum = "Chordata";
    private $class = "Mammalia";
    private $order = "Carnivara";
    private $family = "Canidae";
    private $genus = "Canis";
    private $species = "Canis Lupus";
    private $subspecies = "Canis Lupus Familiaris";
    private $breed = "German Shepherd Dog";
    private $fur_color;

    public function __construct(string $eye_color,
                                string $dob,
                                string $fur_color)
    {
        $this->eye_color = $eye_color;
        $this->dob = $dob;
        $this->fur_color = $fur_color;
    }

    public function walk()
    {
        echo "I'm walking";
    }

    public function bark()
    {
        echo "I'm barking";
    }

    public function sleep(int $energy_level = 100)
    {
        if ($energy_level < 40) {
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
        return ($this->does_shed) ? "Yes" : "No";
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
//        var_dump(
//            [
//                "eye_color" => $this->eye_color,
//                "dob" => $this->dob,
//                "does_shed" => $this->does_shed = true,
//                "kingdom" => $this->kingdom = "Animalia",
//                "phylum" => $this->phylum = "Chordata",
//                "class" => $this->class = "Mammalia",
//                "order" => $this->order = "Carnivara",
//                "family" => $this->family = "Canidae",
//                "genus" => $this->genus = "Canis",
//                "species" => $this->species = "Canis Lupus",
//                "subspecies" => $this->subspecies = "Canis Lupus Familiaris",
//                "breed" => $this->breed = "German Shepherd Dog",
//                "fur_color" => $this->fur_color,
//            ]
//        );
    }
}

$gs_dog = new GermanShepherd("Brown", "Jan 20, 2018", "Brown");
echo $gs_dog->get_eye_color();




// Car Class
class Car
{

    const HAS_HEADLIGHTS = true;
    const HAS_TAIL_LIGHTS = true;
    const HAS_TURN_SIGNALS = true;

    private string $color;
    private string $make;
    private string $model;
    private int $year;
    private int $fuel_type;
    private int $hp;
    private int $tq;
    private string $transmission;
    private string $vehicle_type;
    private float $exterior_height;
    private float $exterior_width;
    private float $exterior_length;
    private string $exterior_um;
    private float $weight;
    private string $weight_um;
    private bool $car_on;

    public function __construct(int $year,
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
        if ($this->car_on) {
            return "The " . $this->get_make_and_model() . " is already on.";
        }

        $this->car_on = true;
        return $this->get_make_and_model() . " has been turned on.";
    }

    public function turnOff(): string
    {
        if ($this->car_on) {
            $this->car_on = false;
            return "The " . $this->get_make_and_model() . " has been turned off.";
        }

        return "The " . $this->get_make_and_model() . " is already off.";
    }

    public function drive(): string
    {
        if ($this->car_on) {
            return "I'm driving";
        } else {
            return "You gotta turn me on";
        }
    }

    private function get_make_and_model(): string
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

$chevy = new Car(1997, "Chevy", "Camaro");
echo $chevy->turnOn();
echo $chevy->drive();
echo $chevy->turnOff();
echo $chevy->get_make_and_model();