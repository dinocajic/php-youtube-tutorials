<?php
// trim()
$string = " Hello There ";
$string = trim($string);
var_dump($string);

// ltrim()
$string = " Hello There ";
$string = ltrim($string);
var_dump($string);

// rtrim()
$string = " Hello There ";
$string = rtrim($string);
var_dump($string);

// htmlspecialchars()
$html = '<script>alert("Hacked");</script>';
$sanitized = htmlspecialchars($html);
var_dump($sanitized);

// AddSlashes
var_dump( addslashes("Hello there. What's up?") );
var_dump( addslashes('She said, "I am not interested."') );
var_dump( addslashes('c:\users\dino"') );

// str_replace
var_dump( str_replace("Hello", "Hey", "Hello, what's going on?") );

$search = ["Hello", "Hey", "Hi"];
var_dump( str_replace($search, "Good Morning", "Hey There. How are you? I said Hello.") );

$search  = ["Hello", "Hey", "Hi"];
$replace = ["Good Morning", "Good Day", "Good Evening"];
var_dump( str_replace($search, $replace, "Hey There. How are you? I said Hello.") );

// str_len
var_dump( strlen("Dino") );

// strtolower
var_dump( strtolower("Dino") );
var_dump( strtolower("DINO") );

// strtoupper
var_dump( strtoupper("Dino") );
var_dump( strtoupper("dino") );

// ucfirst
var_dump( ucfirst("hey there. how's it going?") );

// strpos
var_dump( strpos("Hi there.", "Hi") );
var_dump( strpos("Hi there.", "there") );
var_dump( strpos("Hi there.", "ere") );
var_dump( strpos("Hi there.", "frank") );

if ( strpos("Hi there", "Hi") != false ) {
    echo "Found a match";
} else {
    echo "Didn't find a match";
}

if ( strpos("Hi there", "Hi") !== false ) {
    echo "Found a match";
} else {
    echo "Didn't find a match";
}

var_dump( strpos("Hi there.", "hi") );
var_dump( stripos("Hi there.", "hi") );

var_dump( strrpos("Hi there. Hi.", "Hi") );

var_dump( strrpos("Hi there. Hi.", "hi") );
var_dump( strripos("Hi there. Hi.", "hi") );