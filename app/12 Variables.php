<?php
// Variables
$awesome  = true;
$_awesome = true;
$_awesome = 1;
$_awesome = "yes";

$the_best_pizza_in_the_world_is_made_by_big_pie_in_the_sky = true;

$dinoIsGoingToSleepAfterCreatingThisTutorial = false;

$_bestNumber = 42;
$wanna_fight_about_it = 1; // -> 0x12FF[1]
$do_you_really_wanna_fight_about_it = $wanna_fight_about_it; // 0x34FD[1]

$do_you_really_wanna_fight_about_it = 0; // 0x34FD[0]

echo "<div>" . $wanna_fight_about_it . "</div>";
echo "<div>" . $do_you_really_wanna_fight_about_it . "</div>";

$i_really_wanna_fight = &$wanna_fight_about_it; // -> 0x12FF[1]
$i_really_wanna_fight = 10; // 0x12FF[10]

echo "<div>" . $wanna_fight_about_it . "</div>";
echo "<div>" . $i_really_wanna_fight . "</div>";