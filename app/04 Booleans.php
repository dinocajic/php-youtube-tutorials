<?php

$in_garage_mkiv_supra = false; // :(
$in_garage_sti = true; // :)
$in_garage_r32_skyline = false; // :(
$in_garage_corvette = true; // :)

if ( $in_garage_sti == true ) {
    echo "Hooray. I've got AWD!";
}

if ( $in_garage_mkiv_supra ) {
    echo "I'll be sleeping in the garage tonight.";
}

if ( ! $in_garage_r32_skyline ) {
    echo "Tears flowing down my face.";
}

$current_money = 10;
$rich = $current_money > 100000;

if ( $rich ) {
    echo "I'm rich...bbbbb";
} else {
    echo "Hello sadness my old friend";
}
