<?php
// Getters and Setters

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
echo $gs_dog->getEyeColor();
$gs_dog->setEyeColor("Blue");
echo $gs_dog->getEyeColor();

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
$chevy->setHp(900);
$chevy->setTq(1000);

echo $chevy->getHp();
echo $chevy->getTq();

$chevy->setYear(-1);