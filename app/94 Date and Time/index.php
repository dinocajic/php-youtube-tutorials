<?php

$current_date_time = getdate();
echo $current_date_time['weekday'];

echo "<br>";

$localtime = localtime();
$current_year = $localtime[5] + 1900;
echo $current_year;

echo "<br>";

echo date("F d, Y");
echo "<br>";
echo date("m/d/y");
echo "<br>";

$human_readable_datetime = "October 10 2022 5:00am";
$unix_timestamp = strtotime($human_readable_datetime);
echo date("F d, Y | g:ia", $unix_timestamp);
echo "<br>";

$made_time = mktime(5, 00, 00, 10, 10, 2022);
echo date("F d, Y | g:ia", $made_time);
echo "<br>";

var_dump( checkdate(11, 20, 2023) );
var_dump( checkdate(13, 20, 2023) );
var_dump( checkdate(02, 29, 2023) );
var_dump( checkdate(02, 29, 2024) );