<?php
require_once("Car.php");
require_once("GermanShepherd.php");

$chevy = new Car(1998, "Mitsubishi", "3000GT");
$chevy->setHp(600);
$chevy->setTq(800);

echo $chevy->getHp();
echo $chevy->getTq();

$chevy->setYear(1997);
echo $chevy->turnOn();
echo $chevy->drive();
echo $chevy->turnOff();

echo "<br>";

$gs_dog = new GermanShepherd("Black", "Oct 15, 2018", "Brown");
echo "Eye Color: " . $gs_dog->getEyeColor() . "<br>";
echo "DOB: " . $gs_dog->getDob() . "<br>";
echo $gs_dog->bark() . "<br>";