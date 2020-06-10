<?php
// Functions returning values

$num_of_subscribers = 282;

$camera = ( $num_of_subscribers > 100000 ) ? "Canon EOS 1DX Mark II" : "Used GoPro";

var_dump($camera);

function do_secret_calculation( $secret_num_one, $secret_num_two ) {

    $x = $secret_num_one * 19;
    $y = $secret_num_two * 34;

    $z = $x + $secret_num_one - $secret_num_two + $y;

//    if ( $z >= 0 ) {
//        echo "You got the correct numbers<br>";
//    } else {
//        echo "You have the wrong numbers<br>";
//    }

    return $z;
}

$num1 = do_secret_calculation(10, 33);
$num2 = do_secret_calculation(22, 12);

var_dump($num1);
var_dump($num2);

function assign_one() {
    $x = 1;

    return $x;

    $x++;
}

$one = assign_one();

var_dump($one);

function display_two() {
    return "two";
}

echo "You are returning the number " . display_two();

function i_am_an_array() {
    return [
        "one",
        "two",
        "three"
    ];
}

var_dump( i_am_an_array() );