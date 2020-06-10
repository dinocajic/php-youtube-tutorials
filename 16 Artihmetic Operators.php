<?php

$a = 2 + 2; // 4
$b = 5 - 3; // 2
$c = $a * $b; // 8
$d = $c / 2; // 4
$e = $d % 2; // 0
$f = $d ** 2; // 16
$g = 5 % 2; // 1

echo "<div>" . $a . "</div>";
echo "<div>" . $b . "</div>";
echo "<div>" . $c . "</div>";
echo "<div>" . $d . "</div>";
echo "<div>" . $e . "</div>";
echo "<div>" . $f . "</div>";
echo "<div>" . $g . "</div>";

$h = $a + $b * $c; // $h = $a + ($b * $c) = 4 + (2 * (4 * 2)) = 20

echo "<div>" . $h . "</div>";