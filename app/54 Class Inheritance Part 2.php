<?php
class Vehicle {
    protected string $color;
    protected string $make;
    protected string $model;
    protected int $year;
    protected float $exterior_height;
    protected float $exterior_width;
    protected float $exterior_length;
    protected string $exterior_um;
    protected float $weight;
    protected string $weight_um;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        if ( $year < 0 ) {
            echo "Not a valid year";
            return;
        }

        $this->year = $year;
    }

    /**
     * @return float
     */
    public function getExteriorHeight(): float
    {
        return $this->exterior_height;
    }

    /**
     * @param float $exterior_height
     */
    public function setExteriorHeight(float $exterior_height): void
    {
        $this->exterior_height = $exterior_height;
    }

    /**
     * @return float
     */
    public function getExteriorWidth(): float
    {
        return $this->exterior_width;
    }

    /**
     * @param float $exterior_width
     */
    public function setExteriorWidth(float $exterior_width): void
    {
        $this->exterior_width = $exterior_width;
    }

    /**
     * @return float
     */
    public function getExteriorLength(): float
    {
        return $this->exterior_length;
    }

    /**
     * @param float $exterior_length
     */
    public function setExteriorLength(float $exterior_length): void
    {
        $this->exterior_length = $exterior_length;
    }

    /**
     * @return string
     */
    public function getExteriorUm(): string
    {
        return $this->exterior_um;
    }

    /**
     * @param string $exterior_um
     */
    public function setExteriorUm(string $exterior_um): void
    {
        $this->exterior_um = $exterior_um;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getWeightUm(): string
    {
        return $this->weight_um;
    }

    /**
     * @param string $weight_um
     */
    public function setWeightUm(string $weight_um): void
    {
        $this->weight_um = $weight_um;
    }

    protected function get_make_and_model(): string
    {
        return $this->make . " " . $this->model;
    }
}

// Car Class
class Car extends Vehicle
{

    const HAS_HEADLIGHTS = true;
    const HAS_TAIL_LIGHTS = true;
    const HAS_TURN_SIGNALS = true;

    private int $fuel_type;
    private int $hp;
    private int $tq;
    private string $transmission;
    private string $vehicle_type;
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

    /**
     * @return int
     */
    public function getFuelType(): int
    {
        return $this->fuel_type;
    }

    /**
     * @param int $fuel_type
     */
    public function setFuelType(int $fuel_type): void
    {
        $this->fuel_type = $fuel_type;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getTq(): int
    {
        return $this->tq;
    }

    /**
     * @param int $tq
     */
    public function setTq(int $tq): void
    {
        $this->tq = $tq;
    }

    /**
     * @return string
     */
    public function getTransmission(): string
    {
        return $this->transmission;
    }

    /**
     * @param string $transmission
     */
    public function setTransmission(string $transmission): void
    {
        $this->transmission = $transmission;
    }

    /**
     * @return string
     */
    public function getVehicleType(): string
    {
        return $this->vehicle_type;
    }

    /**
     * @param string $vehicle_type
     */
    public function setVehicleType(string $vehicle_type): void
    {
        $this->vehicle_type = $vehicle_type;
    }

    /**
     * @return bool
     */
    public function isCarOn(): bool
    {
        return $this->car_on;
    }

    /**
     * @param bool $car_on
     */
    public function setCarOn(bool $car_on): void
    {
        $this->car_on = $car_on;
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
$chevy->setHp(900);
$chevy->setTq(1000);

echo $chevy->getHp();
echo $chevy->getTq();

$chevy->setYear(1999);
echo $chevy->turnOn();
echo $chevy->drive();
echo $chevy->turnOff();








//    protected $phylum = "Chordata";
//    protected $class = "Mammalia";
//    protected $order = "Carnivara";
//    protected $family = "Canidae";
//    protected $genus = "Canis";
//    protected $species = "Canis Lupus";
//    protected $subspecies = "Canis Lupus Familiaris";


class Animal {
    const HAS_HEART = true;

    protected $dob;
    protected $kingdom = "Animalia";
    protected $phylum;
    protected $class;
    protected $order;
    protected $family;
    protected $genus;
    protected $species;
    protected $subspecies;

    /**
     * @return string
     */
    public function getDob(): string
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     */
    public function setDob(string $dob): void
    {
        $this->dob = $dob;
    }

    /**
     * @return string
     */
    public function getKingdom(): string
    {
        return $this->kingdom;
    }

    /**
     * @return mixed
     */
    public function getPhylum()
    {
        return $this->phylum;
    }

    /**
     * @param mixed $phylum
     */
    public function setPhylum($phylum): void
    {
        $this->phylum = $phylum;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param mixed $family
     */
    public function setFamily($family): void
    {
        $this->family = $family;
    }

    /**
     * @return mixed
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * @param mixed $genus
     */
    public function setGenus($genus): void
    {
        $this->genus = $genus;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    /**
     * @return mixed
     */
    public function getSubspecies()
    {
        return $this->subspecies;
    }

    /**
     * @param mixed $subspecies
     */
    public function setSubspecies($subspecies): void
    {
        $this->subspecies = $subspecies;
    }

    public function sleep(int $energy_level = 100)
    {
        if ($energy_level < 40) {
            echo "I'm sleeping";
        } else {
            echo "I don't want to sleep";
        }
    }
}

class Mammal extends Animal {

    protected $eye_color;

    /**
     * @return string
     */
    public function getEyeColor(): string
    {
        return $this->eye_color;
    }

    /**
     * @param string $eye_color
     */
    public function setEyeColor(string $eye_color): void
    {
        $this->eye_color = $eye_color;
    }
}

class Dog extends Mammal
{
    const HAS_TAIL = true;

    protected $does_shed = true;
    protected $breed;
    protected $fur_color;

    /**
     * @return bool
     */
    public function isDoesShed(): bool
    {
        return $this->does_shed;
    }

    /**
     * @param bool $does_shed
     */
    public function setDoesShed(bool $does_shed): void
    {
        $this->does_shed = $does_shed;
    }

    /**
     * @return string
     */
    public function getFurColor(): string
    {
        return $this->fur_color;
    }

    /**
     * @param string $fur_color
     */
    public function setFurColor(string $fur_color): void
    {
        $this->fur_color = $fur_color;
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

    public function walk()
    {
        echo "I'm walking";
    }

    public function bark()
    {
        echo "I'm barking";
    }
}

class GermanShepherd extends Dog
{

    public function __construct(string $eye_color,
                                string $dob,
                                string $fur_color)
    {
        $this->eye_color = $eye_color;
        $this->dob = $dob;
        $this->fur_color = $fur_color;
    }

    public function bark()
    {
        echo "Loud Barking";
    }
}

echo "<br>";

$gs_dog = new GermanShepherd("Green", "Oct 10, 2015", "Brown");
echo "Eye Color: " . $gs_dog->getEyeColor() . "<br>";
echo "DOB: " . $gs_dog->getDob() . "<br>";
echo $gs_dog->bark() . "<br>";