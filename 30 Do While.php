<?php
// Do While
$will_execute = false;

while ( $will_execute ) {
    echo "I will execute at least once";
}

do {
    echo "I will execute at least once. Part 2";
} while( $will_execute );

$i = 0;

do {
    echo $i++ . "<br>";
} while( $i < 10 );

$i = 0;

while ( $i < 10 ) {
    echo $i++ . "<br>";
}

$i = 20;

do {
    echo $i++ . "<br>";
} while ( $i < 10 );

$i = 20;

while ( $i < 10 ) {
    echo $i;
}