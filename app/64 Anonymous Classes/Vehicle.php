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