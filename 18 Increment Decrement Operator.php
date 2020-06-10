<?php
// Increment/Decrement Operators

$a = 5;
$a = $a + 1;

var_dump( $a );
var_dump( $a++ );
var_dump( $a );
var_dump( ++$a );

var_dump( $a-- );
var_dump( $a );
var_dump( --$a );

echo "<div>" . $a++ . " " . $a . " " . ++$a . " " . $a . "</div>";