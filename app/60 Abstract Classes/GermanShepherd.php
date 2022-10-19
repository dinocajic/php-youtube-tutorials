<?php
require_once("Dog.php");

class GermanShepherd extends Dog
{

    static int $num_of_dogs_created = 0;

    public static function update_num_of_dogs_created() {
        self::$num_of_dogs_created++;
    }

    public function get_num_of_dogs_created_plus_two() {
        return 2 + self::$num_of_dogs_created;
    }

    public function __construct(string $eye_color,
                                string $dob,
                                string $fur_color)
    {
        $this->eye_color = $eye_color;
        $this->dob = $dob;
        $this->fur_color = $fur_color;

        self::update_num_of_dogs_created();
    }

    public function bark(): void
    {
        echo "Loud Barking";

    }

    public function walk(): string {
        echo "I am a walking German Shepherd";
        return parent::walk();
    }
}