<?php
namespace Vehicles\Cars\ExoticCars\KnockOffs;

require_once("Car.php");

class Lamborghini extends \Vehicles\Cars\Car {

    private string $secret_code;

    public function __construct( $year, $make, $model, $secret_code ) {
        parent::__construct($year, $make, $model);
        $this->secret_code = $secret_code;

        echo "Knockoff";
    }

    /**
     * @return string
     */
    public function getSecretCode(): string
    {
        return $this->secret_code;
    }

    /**
     * @param string $secret_code
     */
    public function setSecretCode(string $secret_code): void
    {
        $this->secret_code = $secret_code;
    }


}