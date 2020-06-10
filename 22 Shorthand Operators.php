<?php
// Shorthand Operators

$to   = "Jeff";
$subj = "Read it";
$msg  = "Hey Jeff, <br><br>";
$msg .= "You stink<br><br>"; //$msg  = $msg . "Blah Blah Blah";
$msg .= "Sincerely,<br><br>";
$msg .= "Dino";

echo $msg;

$x  = 5;
$x += 4; // x = x + 4 = 9
$x -= 7; // x = x - 7 = 2
$x *= 2; // x = x * 2 = 4
$x %= 2; // x = x % 2 = 0

echo $x;