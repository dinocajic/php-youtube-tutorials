<?php
require_once("Animal.php");

abstract class Mammal extends Animal {

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

    abstract public function walk(): string;
}