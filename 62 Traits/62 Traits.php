<?php
// Traits
require_once("Car.php");
$subaru = new Car("2019", "Subaru", "WRX STi");
$subaru->check_oil_level();
$subaru->check_engine_oil_level();
