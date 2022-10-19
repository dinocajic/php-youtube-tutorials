<?php
$person = [
    'full_name'   => 'Dino Cajic',
    'age'         => 32,
    'ssn'         => '111-11-1111',
    'email'       => 'dinocajic@gmail.com',
    'fav_decimal' => 42.5,
    'is_awesome'  => true,
    'occupation'  => 'Author',
    'book_title'  => 'An Illustrative Introduction to Algorithms',
    'blog_link'   => 'http://medium.com/@dinocajic'
];

echo "<div>" . $person['full_name'] . "</div>";

$person[100] = "Hey there!";

var_dump($person);

unset( $person[100] );
unset( $person['ssn'] );

var_dump($person);

$person['age'] = 33;

var_dump($person);

$car = [
    'year'  => 2008,
    'make'  => 'Porsche',
    'model' => '911'
];

var_dump($car);