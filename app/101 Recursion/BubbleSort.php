<?php

function bubbleSort(&$sort, $length) {

    if ($length <= 1) {
        return;
    }

    for ( $i = 0; $i < $length - 1; $i++ ) {
        if ( $sort[$i] > $sort[$i + 1] ) {
            $temp         = $sort[$i];
            $sort[$i]     = $sort[$i + 1];
            $sort[$i + 1] = $temp;
        }
    }

    bubbleSort($sort, $length - 1);
}

$array = [78,39,14,56,88,94,108,5,15];
$length = count($array);

bubbleSort($array, $length);

var_dump($array);