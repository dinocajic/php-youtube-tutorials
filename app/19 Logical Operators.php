<?php
// Logical Operators

$a = "lowered";
$b = "boosted";
$c = "lifted";

var_dump( $a == "lowered" and $b == "boosted" );
var_dump( $a == "lowered" and $b == "bosted" );
var_dump( $a == "lowered" and $b != "lifted" );

$c = true;
$d = false;

var_dump( $c and $d );
var_dump( $c && $d );

var_dump( $c || $d ); // inclusive or
var_dump( $c or $d );

var_dump( $c xor $d ); // exclusive or

var_dump( !$d );

var_dump( $c && !$d );

var_dump( $c && ( $c || $d ) );
var_dump( $d && ( $c || $d ) );