<?php
// Break

$favorite_programming_language = [
    "java",
    "javascript",
    "php",
    "c",
    "c#",
    "c++"
];

$i = 0;

echo "While Loop<br>";

while ( $i < count($favorite_programming_language) ) {

    echo $i . "<br>";

    if ( $favorite_programming_language[$i] == "php" ) {
        echo "PHP is our favorite<br>";
        break;
    }

    $i++;
}

$i = 0;

echo "Do While Loop<br>";

do {
    if ( $favorite_programming_language[$i] == "php" ) {
        echo "PHP is our favorite<br>";
        break;
    }

    $i++;
} while ( $i < count($favorite_programming_language) );

echo "For Loop<br>";

for ( $i = 0; $i < count($favorite_programming_language); $i++ ) {

    if ( $favorite_programming_language[$i] == "php" ) {
        echo "PHP is our favorite<br>";
        break;
    }
}

echo "Foreach Loop<br>";

foreach( $favorite_programming_language as $language ) {

    if ( $language == "php" ) {
        echo "PHP is our favorite<br>";
        break;
    }
}

$num_of_subscribers = 1000521;

switch( $num_of_subscribers ) {

    case ( $num_of_subscribers > 1000000 ):
        echo "I'm living the life of the rich and the famous";
        break;
    case ( $num_of_subscribers >= 100000 ):
        echo "I quit my job today";
        break;
    case ( $num_of_subscribers >= 1000 ):
        echo "I'm starting to make pennies now";
        break;
    default:
        echo "Keep your day job";
}