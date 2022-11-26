<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$today    = Carbon::now();
$tomorrow = Carbon::tomorrow();

var_dump( $today->equalTo($tomorrow) );
var_dump( $today->notEqualTo($tomorrow) );
var_dump( $today->greaterThan($tomorrow) );
var_dump( $today->greaterThanOrEqualTo($tomorrow) );
var_dump( $today->lessThan($tomorrow) );
var_dump( $today->lessThanOrEqualTo($tomorrow) );

$date = Carbon::create(2022, 11, 25, 10, 00, 00);

var_dump( $date->between($today, $tomorrow) );
var_dump( $date->isBetween($today, $tomorrow) ); // Same as between

var_dump( $date->isFuture() );
var_dump( $date->isPast() );
var_dump( $date->isCurrentYear() );
var_dump( $date->isCurrentMonth() );
var_dump( $date->isNextYear() );
var_dump( $date->isLastYear() );
var_dump( $date->isLeapYear() );
var_dump( $date->isNextQuarter() );
var_dump( $date->isLastQuarter() );
var_dump( $date->isNextMonth() );
var_dump( $date->isLastMonth() );
var_dump( $date->isNextWeek() );
var_dump( $date->isLastWeek() );
var_dump( $date->isSameYear($tomorrow) );
var_dump( $date->isSameMonth($tomorrow) );
var_dump( $date->isSameQuarter($tomorrow) );
var_dump( $date->isSameHour($tomorrow) );
var_dump( $date->isSameMinute($tomorrow) );
var_dump( $date->isSameSecond($tomorrow) );
var_dump( $date->isWeekday() );
var_dump( $date->isWeekend() );
var_dump( $date->isMonday() );
var_dump( $date->isTuesday() );
var_dump( $date->isWednesday() );
var_dump( $date->isThursday() );
var_dump( $date->isFriday() );
var_dump( $date->isSaturday() );
var_dump( $date->isSunday() );
var_dump( $date->is("2022") );
var_dump( $date->is("October 10") );
var_dump( $date->is("October 10, 2022") );
var_dump( $date->isCurrentDay() );
var_dump( $date->isYesterday() );
var_dump( $date->isToday() );
var_dump( $date->isTomorrow() );
var_dump( $date->isSameHour($today) );
var_dump( $date->isSameMinute($today) );
var_dump( $date->isSameSecond($today) );
var_dump( $date->isCurrentHour() );
var_dump( $date->isCurrentMinute() );
var_dump( $date->isCurrentSecond() );