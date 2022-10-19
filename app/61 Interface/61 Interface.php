<?php
// Interfaces
require_once("GermanShepherd.php");
$gs_dog = new GermanShepherd("Brown", "Oct 10, 2015", "Brown");
$gs_dog->bark();
$gs_dog->sleep(30);