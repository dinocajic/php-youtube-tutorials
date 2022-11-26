<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

// Current Date and Time
$now = Carbon::now();
var_dump($now);

// Current Date and Time at a Specific Timezone
$timezone = new DateTimeZone("America/New_York");
$now_at_eastern_timezone = Carbon::now( $timezone );
var_dump($now_at_eastern_timezone);

// Yesterday at 00:00:00
$yesterday = Carbon::yesterday();
var_dump($yesterday);

// Tomorrow at 00:00:00
$tomorrow = Carbon::tomorrow();
var_dump($tomorrow);

// Yesterday at 00:00:00 in America/New_York
$timezone = new DateTimeZone("America/New_York");
$yesterday = Carbon::yesterday( $timezone );
var_dump($yesterday);

// Instantiate to a specific date at the current time
$year = 2005;
$month = 10;
$day = 15;
$timezone = "America/New_York";
$specific_date = Carbon::createFromDate($year, $month, $day, $timezone);
var_dump($specific_date);

// Instantiate to a specific time today
$hour = 5;
$minute = 19;
$second = 35;
$timezone = "America/New_York";
$specific_time = Carbon::createFromTime($hour, $minute, $second, $timezone);
var_dump($specific_time);

// Instantiate to a specific date and time
$year = 2005;
$month = 10;
$day = 15;
$hour = 5;
$minute = 19;
$second = 35;
$timezone = "America/New_York";
$specific_date_and_time = Carbon::create($year, $month, $day, $hour, $minute, $second, $timezone);
var_dump($specific_date_and_time);























