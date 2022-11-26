<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$date = Carbon::now();

echo $date->format("F d, Y h:i:s");
echo $date->toJSON();