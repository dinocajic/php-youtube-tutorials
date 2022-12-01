<?php

$pattern = "/Dino/";
$search_string = "Hey. My name is Dino. How are you?";

var_dump( preg_match($pattern, $search_string, $matches) );
var_dump( $matches );

// [abc] A single character: a, b, or c
$pattern = "/[xyz]/";
$search_string = "Hey. My name is Dino. How are you?";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// [^abc] Any single character except a, b, or c
$pattern = "/[^xyz]/";
$search_string = "Hello there.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// [a-z] Any single character in the range a-z
$pattern = "/[a-z]/";
$search_string = "Hello there.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[s-y]/";
$search_string = "Hello there.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[b-es-y]/";
$search_string = "Hello there.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// [a-zA-Z] Any single character in the range a-z or A-Z
$pattern = "/[a-zA-Z]/";
$search_string = "My name is Dino.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[b-dD-G]/";
$search_string = "My name is Dino.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// ^ Start of line
$pattern = "/^Hello/";
$search_string = "My name is Dino. Hello there.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/^Hello/";
$search_string = "Hello there. My name is Dino.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// $ End of line
$pattern = "/[0-9]/";
$search_string = "Hello there. I'm 32. My name is Dino.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[0-9]$/";
$search_string = "Hello there. My name is Dino. I'm 32";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// . Any single character
$pattern = "/[0-9].$/";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[0-9].$/";
$search_string = "Hello there. My name is Dino. I'm 32";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[0-9].$/";
$search_string = "Hello there. My name is Dino. I'm 32a";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[0-9]\.$/";
$search_string = "Hello there. My name is Dino. I'm 32a";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/[0-9]\.$/";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \d Any digit
$pattern = "#\d\.$#";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \D Any non-digit
$pattern = "#\D#";
$search_string = "5554445555";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#\D#";
$search_string = "555-444-5555";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \s Any whitespace character
$pattern = "#\s#";
$search_string = "555 444-5555";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#\d\s#";
$search_string = "555 444-5555";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \S Any non-whitespace character
$pattern = "#\d\S#";
$search_string = "555 444-5555";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \w Any word character (letter, number, underscore)
$pattern = "#\w#";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// \W Any non-word character
$pattern = "#\W#";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#(th)#";
$search_string = "Hello there. I'm one of the people here.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#(th)(ere)#";
$search_string = "Hello there. I'm one of the people here.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// (a|b) a or b
$pattern = "/(D|d)ino/";
$search_string = "Hello there. My name is Dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/(D|d)ino/";
$search_string = "Hello there. My name is Din. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/(D|d)ino/";
$search_string = "Hello there. My name is Dino or dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/(D|d)(i)no/";
$search_string = "Hello there. My name is Dino or dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "/(i)(D|d)no/";
$search_string = "Hello there. My name is Dino or dino. I'm 32.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

// Quantifiers
$pattern = "#\d\d\d-\d\d\d-\d\d\d\d#";
$search_string = "Hello there. My name is Dino. My number is 555-444-5555.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#\d{3}-\d{3}-\d{4}#";
$search_string = "Hello there. My name is Dino. My number is 555-444-5555.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );

$pattern = "#[G-I].{4}\s\w*\.\W?\D{1,}\d*-\w*\s.+#";
$search_string = "Hello there. My name is Dino. I'm 32-years old. Pretty cool.";

preg_match($pattern, $search_string, $matches);
var_dump( $matches );















