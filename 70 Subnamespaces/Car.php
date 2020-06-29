<?php
namespace Vehicles\Cars;

/**
 * Vehicles/
 *   Car/
 *     Car (class)
 *   Driver
 *   Engine
 *   Transmission
 *   ...
 */

require_once('Vehicle.php');
require_once('Engine.php');
require_once('Transmission.php');

class Car extends \Vehicles\Vehicle
{
    use \Vehicles\Cars\CarParts\Transmission, \Vehicles\Cars\CarParts\Engine {
        \Vehicles\Cars\CarParts\Transmission::check_oil_level insteadof \Vehicles\Cars\CarParts\Engine;
        \Vehicles\Cars\CarParts\Engine::check_oil_level as check_engine_oil_level;
    }

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

    public function get_year_make_and_model(): string
    {
        return $this->year . " " . $this->make . " " . $this->model;
    }
}