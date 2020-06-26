<?php
require_once('Mammal.php');

abstract class Dog extends Mammal
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

    abstract public function walk(): string;
    abstract public function bark(): void;
}