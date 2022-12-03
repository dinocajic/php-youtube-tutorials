<?php

class ToStringTest
{
    private string $name = "Dino Cajic";

    public function __toString() {
        return $this->name;
    }
}

$test = new ToStringTest;
echo $test;