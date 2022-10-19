<?php
// For Loop
// for (expression_before; expression_before_loop_body; expression_after) { loop body }

$i = 0;

while ( $i < 10 ) {
    echo $i . "<br>";
    $i++;
}

for ( $i = 0; $i < 10; $i++ ) {
    echo $i . "<br>";
}

$things_i_hate = [
    "lists",
    "repetition",
    "entitlement",
    "my job"
];

for ( $i = 0; $i < count($things_i_hate); $i++ ) {
    echo $things_i_hate[$i] . "<br>";
}

for ( $i = count($things_i_hate) - 1; $i >= 0; $i-- ) {
    echo $things_i_hate[$i] . "<br>";
}