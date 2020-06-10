<?php
$x = 0;
$y = 1;
$z = -2;

//echo $x + $y + $z;

$x = 2147483647;
$y = 2147483648;

echo "<div>X: " . $x . "</div>";
echo "<div>Y: " . $y . "</div>";

// 9223372036854775807
$x_64 = 9223372036854775807;
$y_64 = 9223372036854775808;

echo "<div>X64: " . $x_64 . "</div>";
echo "<div>Y64: " . $y_64 . "</div>";

echo "<div>X Type: " . gettype($x) . "</div>";
echo "<div>Y Type: " . gettype($y) . "</div>";
echo "<div>X64 Type: " . gettype($x_64) . "</div>";
echo "<div>Y64 Type: " . gettype($y_64) . "</div>";
