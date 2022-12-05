<?php
$a = 10;
$b = 20;

function sum()
{
    global $a, $b;

    $b = $a + $b;
}

sum();
var_dump($a);
var_dump($b);

$a = 0;
$b = 0;
sum();
var_dump($a);
var_dump($b);

function sumAlternative()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}