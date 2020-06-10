<?php
// If statements

if ( true ) {
    echo "Donkey ";
}

$a = 10;

if ( $a > 5 ) {
    echo "Math ";
}

$word = "confused";

if ( $word == "confused" ) {
    echo "Bumfuzzle ";
}

$onestatement = true;

if ( $onestatement )
    echo "Taradiddle ";

$nobooks = false;

if ( !$nobooks ) {
    echo "Abibliophobia ";

    $bookname = "Insert your favorite book title";

    echo "I'm about to start writing my own book: " . $bookname;
}

$time = 6; // refers to 6 am

if ( $time >= 6 && $time < 9 ):
    echo "Pandiculation";
endif;

