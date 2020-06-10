<?php
// Ternary Operator
// expression ? if_true : if_false
$expression = true;

if ( $expression ) {
    // do statement if true
} else {
    // do statement if false
}

$money = 2000;

echo ( $money >= 2000 ) ? "Time to buy stuff" : "Need more money";

$isBuyingAMountainBike = ( $money >= 2000 ) ? true : false;

var_dump($isBuyingAMountainBike);

$employeeOrCustomer = "employee";

$msg = "Hey ";

if ( $employeeOrCustomer == "employee" ) {
    $msg .= "dude";
} else {
    $msg .= "sir/ma'am";
}

$msg .= ",<br><br>How are you?";

var_dump($msg);

$msg2 = "Hey " . ( ($employeeOrCustomer == "employee") ? "dude" : "sir/ma'am" ) . ",<br><br>How are you?";

var_dump($msg2);

if ( $employeeOrCustomer == "employee" ) {
    if ( $money >= 2000000 ) {
        echo "I'm about to quit cause I'm rich";
    }
}