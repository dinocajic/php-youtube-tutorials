<?php
// Comparison Operators

$a = 10;
$b = 5;
$c = "10";

var_dump( $a == $b );
var_dump( $a === $b );

var_dump( $a == $c );
var_dump( $a === $b );

var_dump( $a != $b );
var_dump( $a <> $b );

var_dump( $a != $c );
var_dump( $a !== $c );

var_dump( $a < $b );
var_dump( $a > $b );

var_dump( $a <= $c );
var_dump( $a >= $c );

// Spaceship Operator 0 when equal, -1 if right larger, 1 if left is larger
var_dump( $a <=> $b );

var_dump( $a == true );
var_dump( $a === true );

var_dump( 4.5 > 2 );

var_dump( "Dino" == "dino" );
var_dump( "Dino" == "Dino" );