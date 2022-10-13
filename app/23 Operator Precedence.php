<?php
// Operator Precedence
// 2 + 3 * 5 = 17

$a = true;
$b = false;

var_dump( $a && !$b ); // !$b = !false = true

$c = 10;
$d = 12;

var_dump( $c + $d > $d * 2 );
// $c + $d > 24
// 22 > 24
// false
// *
// +
// >

var_dump( ($c + ($d * $c)) / $d );