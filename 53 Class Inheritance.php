<?php
// Class Inheritance

class Dog {
    const HAS_HEART = true;
    const HAS_TAIL = true;

    protected $eye_color;
    protected $dob;
    protected $does_shed = true;
    protected $kingdom = "Animalia";
    protected $phylum = "Chordata";
    protected $class = "Mammalia";
    protected $order = "Carnivara";
    protected $family = "Canidae";
    protected $genus = "Canis";
    protected $species = "Canis Lupus";
    protected $subspecies = "Canis Lupus Familiaris";
    protected $breed;
    protected $fur_color;

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

    public function sleep(int $energy_level = 100)
    {
        if ($energy_level < 40) {
            echo "I'm sleeping";
        } else {
            echo "I don't want to sleep";
        }
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

    public function bark() {
        echo "Loud Barking";
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

$gs_dog = new GermanShepherd("Green", "Oct 10, 2015", "Brown");
echo "Eye Color: " . $gs_dog->getEyeColor() . "<br>";
echo $gs_dog->bark() . "<br>";