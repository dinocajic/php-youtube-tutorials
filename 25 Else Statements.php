<?php
// If/Else

$exercised_this_morning = false;

if ( $exercised_this_morning ) {
    echo "You're on your way to look fabulous.";
} else {
    echo "Crickets.";
}

$best_tv_show_in_2020 = "Upload";

if ( $best_tv_show_in_2020 == "Upload" )
    echo "Damn straight it's Upload";
else
    echo "The best afterlife show is actually The Good Place";

$use_colons = false;

if ( $use_colons ):
    echo "You get colonoscopy. Congrats.";
else:
    echo "No colonoscopy for you. Phew!";
endif;