<?php
$x = 2;
$y = 3;

//echo $x + $y;

$car_year = 1999;
$car_brand = "Nissan";
$car_model = "R34 Skyline GTR";

$year_legal = $car_year + 25;
$current_year = date('Y');

// Movie script
echo "<div>" . "Dino: Oh my God! I just saw a " . $car_year . " " . $car_brand . " " . $car_model . "</div>";
echo "<div>" . "Frank: You have to be kidding me. They're not even legal yet." . "</div>";
echo "<div>" . "Dino: I know. They must have bought it through that one company that imported all of them legally...Lucky bastard" . "</div>";
echo "<div>" . "Dino: Only " . ($year_legal - $current_year) . " more years to go before I sell my soul to own one." . "</div>";
