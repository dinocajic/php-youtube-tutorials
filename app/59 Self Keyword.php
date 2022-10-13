<?php
// Self Keyword
require_once("GermanShepherd.php");
$gs_dog = new GermanShepherd("Brown", "10/10/2019", "Brown");

echo "Num of instances created: " . GermanShepherd::$num_of_dogs_created . "<br>";

GermanShepherd::update_num_of_dogs_created();
echo "Update it again: " . GermanShepherd::$num_of_dogs_created . "<br>";

echo "Num of dogs created + 2: " . $gs_dog->get_num_of_dogs_created_plus_two();