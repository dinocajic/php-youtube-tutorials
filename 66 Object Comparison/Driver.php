<?php

class Driver {

    private Car $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function drive() {
        echo $this->car->turnOn();
        echo $this->car->drive();
        echo $this->car->turnOff();
    }

//    public function drive(Car $car) {
//        echo $car->turnOn();
//        echo $car->drive();
//    }
}