<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$yesterday   = Carbon::yesterday();
$future_date = Carbon::create(2025, 10, 10, 5, 30, 22);

var_dump( $future_date->diffInHours($yesterday) );
var_dump( $future_date->diffInMinutes($yesterday) );
var_dump( $future_date->diffInSeconds($yesterday) );
var_dump( $future_date->diffInDays($yesterday) );
var_dump( $future_date->diffInWeekdays($yesterday) );
var_dump( $future_date->diffInWeekendDays($yesterday) );
var_dump( $future_date->diffInWeeks($yesterday) );
var_dump( $future_date->diffInMonths($yesterday) );
var_dump( $future_date->diffInQuarters($yesterday) );
var_dump( $future_date->diffInYears($yesterday) );

var_dump( $future_date->diffForHumans($yesterday) );

