<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = Carbon::now();

$date->timezone = "America/New_York";
$date->year = 2005;
$date->month = 6;
$date->day = 20;
$date->hour = 5;
$date->minute = 20;

// You can also prepend each property with set and pass the argument
$date->setYear(2010);

var_dump($date);