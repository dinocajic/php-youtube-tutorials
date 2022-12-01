<?php

// array_chunk
$array = ["Hello", "There", "How", "Are", "You", "Doing", "Today"];
var_dump( array_chunk($array, 2) );
var_dump( array_chunk($array, 3) );
var_dump( array_chunk($array, 3, true) );

$array = [
    "first_key" => "Hello",
    "second_key" => "There",
    "third_key" => "How",
    "fourth_key" => "Are",
    "fifth_key" => "You",
    "sixth_key" => "Doing",
    "seventh_key" => "Today"
];
var_dump( array_chunk($array, 2) );
var_dump( array_chunk($array, 3) );
var_dump( array_chunk($array, 3, true) );

// array_diff
$first  = ["first_key"  => "value", "Hey", "How", "Are", "You"];
$second = ["second_key" => "value", "Hey", "How", "You"];

var_dump( array_diff($first, $second) );

// array_key_exists
$array = [
    "first_key" => "Hello",
    "second_key" => "There",
    "third_key" => "How",
];

var_dump( array_key_exists("fourth_key", $array) );
var_dump( array_key_exists("second_key", $array) );

// array_key_first, array_key_last
$array = [
    "first_key" => "Hello",
    "second_key" => "There",
    "third_key" => "How",
];

var_dump( array_key_first($array) );
var_dump( array_key_last($array) );

// array_merge
$first  = ["first_key"  => "value", "Hey", "How", "Are", "You"];
$second = ["second_key" => "value", "Hey", "How", "You"];
$third  = ["third_key"  => "value", "Hey", "How", "You"];

var_dump( array_merge($first, $second) );
var_dump( array_merge($first, $second, $third) );

$first  = ["first_key"  => "value one"];
$second = ["first_key"  => "value two"];

var_dump( array_merge($first, $second) );

// array_push
$array = ["Hello", "There"];
array_push($array, "How", "Are", "You");

var_dump($array);

$array = ["Hello", "There"];
$array[] = "How";
$array[] = "Are";
$array[] = "You";

var_dump($array);

// array_sum
$array = [1, 2.2, 3, 4, "named_key" => 6];
var_dump( array_sum($array) );

// asort
$first  = ["E", "C", "B", "A"];
$second = ["E", "c", "B", "A"];
$third  = ["E", 1, "B", 63];
$fourth = ["E", "first_key" => 1, "second_key" => "B", 63];

asort($first);
asort($second);
asort($third);
asort($fourth);

var_dump( $first );
var_dump( $second );
var_dump( $third );
var_dump( $fourth );

// arsort
$first  = ["E", "C", "B", "A"];
$second = ["E", "c", "B", "A"];
$third  = ["E", 1, "B", 63];
$fourth = ["E", "first_key" => 1, "second_key" => "B", 63];

arsort($first);
arsort($second);
arsort($third);
arsort($fourth);

var_dump( $first );
var_dump( $second );
var_dump( $third );
var_dump( $fourth );

// count
$array  = ["E", "C", "B", "A"];

var_dump( count($array) );

// in_array
$first  = ["E", 1, "B", 63];
$second = ["E", "first_key" => 1, "second_key" => "B", 63];

var_dump( in_array("E", $first) );
var_dump( in_array("A", $second) );
var_dump( in_array(63, $second) );
var_dump( in_array("first_key", $second) );

// ksort
$first  = ["E", 1, "B", 63];
$second = ["E", "z_key" => 1, "a_key" => "B", 63];

ksort($first);
ksort($second);

var_dump( $first );
var_dump( $second );

// krsort
$first  = ["E", 1, "B", 63];
$second = ["E", "z_key" => 1, "a_key" => "B", 63];

krsort($first);
krsort($second);

var_dump( $first );
var_dump( $second );

// sort
$first  = ["E", 1, "B", 63];
$second = ["E", "z_key" => 1, "a_key" => "B", 63];

sort($first);
sort($second);

var_dump( $first );
var_dump( $second );

// rsort
$first  = ["E", 1, "B", 63];
$second = ["E", "z_key" => 1, "a_key" => "B", 63];

rsort($first);
rsort($second);

var_dump( $first );
var_dump( $second );

// shuffle
$array  = ["first_key"  => "value", "Hey", "How", "Are", "You"];

shuffle($array);
var_dump($array);

shuffle($array);
var_dump($array);

// sizeof
$array  = ["E", "C", "B", "A"];

var_dump( sizeof($array) );

// is_array
$first = ["A", "B"];
$second = "Dino";

var_dump( is_array($first) );
var_dump( is_array($second) );

// explode
$string = "Hey there. How are you?";
$first = explode(" ", $string);
$second = explode(".", $string);

var_dump( $first );
var_dump( $second );

// implode
$array  = ["Hey,", "How", "Are", "You?"];
$string_one = implode(" ", $array);
$string_two = implode("-", $array);

var_dump($string_one);
var_dump($string_two);

// array_map
function multiply_by_two( $n )
{
    return ($n * 2);
}

$a = [1, 2, 3];
$b = array_map('multiply_by_two', $a);

var_dump( $a );
var_dump( $b );

// array_map 2
$a = [1, 2, 3];
$b = array_map(function($n) {
    return ($n * 2);
}, $a);

var_dump( $a );
var_dump( $b );

// array_map 3
$b = array_map(function($n) {
    return ($n * 2);
}, [1, 2, 3]);

var_dump( $b );

// array_map 4
$b = array_map( fn($n) => $n * 2, [1, 2, 3] );

var_dump( $b );