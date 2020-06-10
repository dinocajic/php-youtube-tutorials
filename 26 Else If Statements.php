<?php
// If/Else If/Else

$mystery_contestant = "To Be Determined";

if ( $mystery_contestant == "Emily" ) {
    echo "Emily's a freak. Let's go";
} elseif ( $mystery_contestant == "Scarlett" ) {
    echo "Helllooooo Scarlett.";
} elseif ( $mystery_contestant == "Aubrey" ) {
    echo "What it is...What it is Aubrey?";
} else {
    echo "Damn it's midnight and they're all gone. " .
         "Ahhhh...come on Genesis.";
}

$punishment = "cataclysmic";

if ( $punishment == "mild" ):
    echo "I just got punched in the face.";
elseif ( $punishment == "severe" ):
    echo "I just got kicked in the nads";
else:
    echo "Colonscopy time";
endif;