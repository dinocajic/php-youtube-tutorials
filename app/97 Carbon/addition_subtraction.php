<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();

var_dump( $now );
var_dump( $now->addYear() );
var_dump( $now->addYears(10) );
var_dump( $now->subYear() );
var_dump( $now->subYears(2) );

var_dump( $now->addMonth() );
var_dump( $now->addMonths(2) );
var_dump( $now->subMonth() );
var_dump( $now->subMonths(25) );

var_dump( $now->addDay() );
var_dump( $now->addDays(5) );
var_dump( $now->subDay() );
var_dump( $now->subDays(92) );

var_dump( $now->addWeekday() );
var_dump( $now->addWeekdays(33) );
var_dump( $now->subWeekday() );
var_dump( $now->subWeekdays(9) );

var_dump( $now->addHour() );
var_dump( $now->addHours(3) );
var_dump( $now->subHour() );
var_dump( $now->subHours(2) );

var_dump( $now->addMinut() );
var_dump( $now->addMinuts(30) );
var_dump( $now->subMinut() );
var_dump( $now->subMinuts(22) );

var_dump( $now->addSecond() );
var_dump( $now->addSeconds(32) );
var_dump( $now->subSecond() );
var_dump( $now->subSeconds(275) );

var_dump( $now->addQuarter() );
var_dump( $now->addQuarters(6) );
var_dump( $now->subQuarter() );
var_dump( $now->subQuarters(2) );

var_dump( $now->addCentury() );
var_dump( $now->addCenturies(3) );
var_dump( $now->subCentury() );
var_dump( $now->subCenturies(3) );
