<?php
// Static Keyword
require_once("GermanShepherd.php");
$gs_dog0 = new GermanShepherd("Brown", "10/10/2019", "Brown");
$gs_dog1 = new GermanShepherd("Brown", "10/10/2019", "Brown");
$gs_dog2 = new GermanShepherd("Brown", "10/10/2019", "Brown");
$gs_dog3 = new GermanShepherd("Brown", "10/10/2019", "Brown");
$gs_dog4 = new GermanShepherd("Brown", "10/10/2019", "Brown");

echo "Num of instances created: " . GermanShepherd::$num_of_dogs_created . "<br>";

GermanShepherd::update_num_of_dogs_created();
echo "Update it again: " . GermanShepherd::$num_of_dogs_created . "<br>";