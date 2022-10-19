<?php
// Switch
//$mystery_contestant = "Aubrey";
//
//if ( $mystery_contestant == "Emily" ) {
//    echo "Emily's a freak. Let's go";
//} elseif ( $mystery_contestant == "Scarlett" ) {
//    echo "Helllooooo Scarlett.";
//} elseif ( $mystery_contestant == "Aubrey" ) {
//    echo "What it is...What it is Aubrey?";
//} else {
//    echo "Damn it's midnight and they're all gone. " .
//        "Ahhhh...come on Genesis.";
//}

$mystery_club_girl = "Emily";

switch ( $mystery_club_girl ) {
    case "Emily":
        echo "Emily's a freak. Let's go";
        break;
    case "Scarlett":
        echo "Helllooooo Scarlett.";
        break;
    case "Aubrey":
        echo "What it is...What it is Aubrey?";
        break;
    default:
        echo "Damn it's midnight and they're all gone. " .
            "Ahhhh...come on Genesis.";
}

$money_in_the_bank = 40000;
$car = "";

switch( $money_in_the_bank ) {
    case 1000000: $car = "McLaren F1";  break;
    case 500000:  $car = "Murcielago";  break;
    case 100000:  $car = "Porsche 911"; break;
    case 75000:   $car = "Hellcat";     break;
    case 40000:   $car = "Subaru STi";  break;
    case 25000:   $car = "Civic";       break;
}

var_dump($car);

$money_in_the_bank2 = 1000000;

switch( $money_in_the_bank2 ) {
    case 1000000: $car = "McLaren F1";
    case 500000:  $car = "Murcielago";
    case 100000:  $car = "Porsche 911";
    case 75000:   $car = "Hellcat";
    case 40000:   $car = "Subaru STi";
    case 25000:   $car = "Civic";
}

var_dump($car);

$brand = "Chevy";

switch( $brand ) {
    case "Apple":
    case "HP":
    case "Samsung":
        echo "This is a tech company";
        break;
    case "Audi":
    case "Chevy":
    case "Porsche":
    case "Subaru":
        echo "This is a car company";
        break;
    default:
        echo "I don't know what this is.";
}

$grade = 80;
// A = 90-100, B = 80-89, C = 70-79, D = 60-69, F = 0-59
switch( $grade ) {
    case ($grade >= 90): echo "A"; break;
    case ($grade >= 80): echo "B"; break;
    case ($grade >= 70): echo "C"; break;
    case ($grade >= 60): echo "D"; break;
    default: echo "F";
}

$grade2 = 95;

switch( $grade2 ):
    case ($grade2 >= 90): echo "A"; break;
    case ($grade2 >= 80): echo "B"; break;
    case ($grade2 >= 70): echo "C"; break;
    case ($grade2 >= 60): echo "D"; break;
    default: echo "F";
endswitch;