<?php

if ( 1 ) {
    echo "He was number 1";
}

if ( -5 )
    echo "He was also number 1";

if ( 0 )
    echo "Was he number 1?";

$names = ['Dino', 'Frank', 'Susan'];

var_dump( (bool) "" );
var_dump( (bool) "Dino" );
var_dump( (bool) "false" );
var_dump( (bool) [] );
var_dump( (bool) $names );

if ( count($names) > 0 )
    echo "This is a true statement";