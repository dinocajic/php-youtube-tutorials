<?php
//$a = 1.234;
//$b = 1.2e3;
//$c = 7E-10;

$a = 1.0000000000001;
$b = 0.0000000000001;
$c = 0.00000000000006;

echo "<div>A: " . $a . "</div>";
echo "<div>A + B: " . ($a + $b) . "</div>";
echo "<div>A + C: " . ($a + $c) . "</div>";

$x = 8 - 6.4; // 1.6
$y = 1.6;

if ($x == $y)
    echo "Yup";
else
    echo "Nope";

function does_it_float(float $a) {
    var_dump($a);
}

does_it_float(1.0001);