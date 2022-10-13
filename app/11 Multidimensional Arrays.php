<?php

$person = [
    'full_name'   => 'Dino Cajic',
    'age'         => 32,
    'ssn'         => '111-11-1111',
    'email'       => 'dinocajic@gmail.com',
    'fav_decimal' => 42.5,
    'is_awesome'  => true,
    'occupation'  => 'Author',
    'books'       => [
        'An Illustrative Introduction to Algorithms',
        'An Illustrative Introduction to Algorithms: Part 2',
        'A Book on PHP',
        'A Horror Novel'
    ],
    'blog_link'   => 'http://medium.com/@dinocajic'
];

echo "<div>" . $person['books'][1] . "</div>";

$car = [
    'year'  => 2020,
    'make'  => 'Nissan',
    'model' => 'GT-R',
    'trims' => [
        'premium' => [
            'price' => '129,998',
            'specs' => [
                'hp' => 565,
                'torque' => 487,
                'fuel_economy' => [
                    'type' => 'premium',
                    'city' => 14.4,
                    'hwy'  => 10.9
                ]
            ]
        ],
        '50th_anniversary' => [
            'price' => '138,998',
            'specs' => [
                'hp' => 565,
                'torque' => 487,
                'fuel_economy' => [
                    'type' => 'premium',
                    'city' => 14.4,
                    'hwy'  => 10.9
                ]
            ]
        ],
        'track_edition' => [
            'price' => '166,998',
            'specs' => [
                'hp' => 600,
                'torque' => 481,
                'fuel_economy' => [
                    'type' => 'premium',
                    'city' => 14.4,
                    'hwy'  => 10.9
                ]
            ]
        ]
    ]
];

echo "<div>" . $car['trims']['premium']['price'] . "</div>";
echo "<div>" . $car['trims']['track_edition']['specs']['fuel_economy']['city'] . "</div>";
