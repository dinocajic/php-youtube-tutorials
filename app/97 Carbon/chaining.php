<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = Carbon::now();

$date->timezone("America/New_York")
    ->year(2005)
    ->month(6)
    ->day(20)
    ->hour(5)
    ->minute(20);

var_dump($date);