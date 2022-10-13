<?php
// use keyword

$best_laptop = "MacBook Pro";

$display_best_laptop = function() use ($best_laptop) {
    echo $best_laptop;
};

$display_best_laptop();

function display_best_laptop_two( $best_laptop ) {
    echo $best_laptop;
}

display_best_laptop_two($best_laptop);