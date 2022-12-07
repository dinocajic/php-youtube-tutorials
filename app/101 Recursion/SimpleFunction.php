<?php

// Result should be: 1 + 2 + 3 + 4 + 5 = 15
$sum = 0;
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}

var_dump($sum);

// Same function as above, just reverse
$sum = 0;
$n = 5;

for ($i = $n; $i > 0; $i--) {
    $sum += $i;
}

var_dump($sum);

// Recursive function to solve the problem above
function recursiveSum( $n ) : int
{
    if ($n < 1) {
        return 0;
    }

    if ($n == 1) {
        return 1;
    }

    return $n + recursiveSum($n - 1);
}

var_dump( recursiveSum(0) );
var_dump( recursiveSum(-42) );
var_dump( recursiveSum(1) );
var_dump( recursiveSum(2) );
var_dump( recursiveSum(5) );

var_dump(recursiveSum(2) === recursiveSum(2));

// Not recursive but a test.

function testFunction($n) {
    return $n;
}

$n = 3;
$result = testFunction($n) + testFunction($n - 1) + testFunction($n - 2);
var_dump($result);
