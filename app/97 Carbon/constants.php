<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

var_dump(Carbon::SUNDAY);             // int(0)
var_dump(Carbon::MONDAY);             // int(1)
var_dump(Carbon::TUESDAY);            // int(2)
var_dump(Carbon::WEDNESDAY);          // int(3)
var_dump(Carbon::THURSDAY);           // int(4)
var_dump(Carbon::FRIDAY);             // int(5)
var_dump(Carbon::SATURDAY);           // int(6)

var_dump(Carbon::YEARS_PER_CENTURY);  // int(100)
var_dump(Carbon::YEARS_PER_DECADE);   // int(10)
var_dump(Carbon::MONTHS_PER_YEAR);    // int(12)
var_dump(Carbon::WEEKS_PER_YEAR);     // int(52)
var_dump(Carbon::DAYS_PER_WEEK);      // int(7)
var_dump(Carbon::HOURS_PER_DAY);      // int(24)
var_dump(Carbon::MINUTES_PER_HOUR);   // int(60)
var_dump(Carbon::SECONDS_PER_MINUTE); // int(60)