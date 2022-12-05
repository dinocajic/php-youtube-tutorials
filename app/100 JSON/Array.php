<?php

// Simple Array
$array = ["Dino Cajic", "Steven Johnson", "Fred Smith"];
echo json_encode($array);

// Associative Array
$array = [
    "name" => "Dino Cajic",
    "age" => 102,
    "email" => "dino@example.com",
    "isWriting" => true,
    "tailColor" => null
];

echo json_encode($array);

// Mixed Array
$array = [
    "name" => "Dino Cajic",
    "age" => 102,
    "email" => "dino@example.com",
    true,
    null
];

echo json_encode($array);