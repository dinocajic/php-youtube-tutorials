<?php
require_once("GermanShepherd.php");

$gs_dog = new GermanShepherd("Black", "Oct 15, 2018", "Brown");
echo $gs_dog->bark() . "<br>";
echo $gs_dog->walk() . "<br>";