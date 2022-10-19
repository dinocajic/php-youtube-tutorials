<?php
define("DB_USERNAME", "dances_with_squirrels");
define("DB_PASSWORD", "hakuna_matata");

echo "<div>" . DB_USERNAME . "</div>";
echo "<div>" . DB_PASSWORD . "</div>";

define("IMG_FOLDER", "/images/animals/bears/");

echo "<div>" . IMG_FOLDER . "black_bear.jpg" . "</div>";

define("CAR", [
    "year" => 1995,
    "make" => "Toyota",
    "model" => "Supra",
    "specs" => [
        "hp" => 1000,
        "tq" => 1200
    ]
]);

var_dump(CAR);

const FAV_FOOD = "Burger";

echo FAV_FOOD;