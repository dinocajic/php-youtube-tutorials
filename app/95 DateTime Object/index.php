<?php
// Instantiating a DateTime Object
$datetime = new DateTime();
var_dump($datetime);

// Modifying the TimeZone
$datetime = new DateTime();
$timezone = new DateTimeZone("America/New_York");
$datetime->setTimezone($timezone);
var_dump($datetime);

// Output date using format method
$datetime = new DateTime();
$timezone = new DateTimeZone("America/New_York");
$datetime->setTimezone($timezone);
echo $datetime->format("F d, Y");

// Instantiate DateTime with constructor
$datetime = new DateTime("11/5/2022 5:00 AM");
var_dump($datetime);

// Modify DateTime with modify method
$datetime = new DateTime("11/5/2022 5:00 AM");
var_dump($datetime);
$datetime->modify("11/10/2022 7:00 AM");
var_dump($datetime);

// Modify date with setDate
$datetime = new DateTime("11/5/2022 5:00 AM");
var_dump($datetime);
$datetime->setDate(2022, 11, 20);
var_dump($datetime);
$datetime->setTime(14, 20, 30);
var_dump($datetime);

// Chaining Methods
$datetime = new DateTime("11/5/2022 5:00 AM");
$datetime->setDate(2022, 11, 20)
    ->setTime(14, 20, 30)
    ->setTimezone(new DateTimeZone("America/New_York"));
var_dump($datetime);

// DateTime Object Operations
$datetime1 = new DateTime("11/5/2022");
$datetime2 = new DateTime("11/4/2022");
var_dump($datetime1 > $datetime2);
var_dump($datetime1 < $datetime2);
var_dump($datetime1 == $datetime2);

// DateTime Difference
$datetime_from = new DateTime("01/20/1978 4:00:32");
$datetime_to   = new DateTime("11/20/2022 22:01:00");

$difference = $datetime_to->diff($datetime_from);
var_dump($difference);

// DateTime Difference with Chaining
$datetime_from = new DateTime("01/20/1978 4:00:32");
$datetime_to   = new DateTime("11/20/2022 22:01:00");
var_dump($datetime_to->diff($datetime_from)->format("The number of years passed is: %Y"));

// Adding to a DateTime object
$datetime = new DateTime("11/23/2022 22:01:00");
$datetime->add(new DateInterval("P10D"));
var_dump($datetime);

// Subtracting a DateTime object
$datetime = new DateTime("11/23/2022 22:01:00");
$datetime->sub(new DateInterval("P1Y65D"));
var_dump($datetime);