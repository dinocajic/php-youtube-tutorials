<?php

class GetAndSetTest
{
    private array $data;

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name];
    }
}

$test = new GetAndSetTest;

$test->name = "Dino Cajic";
echo $test->name;

$test->age = 55;
echo $test->age;