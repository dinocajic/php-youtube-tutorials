<?php

class InvokeTest
{
    public function __invoke( $name )
    {
        echo "Hey " . $name;
    }
}

$invoke = new InvokeTest;
$invoke("Dino");