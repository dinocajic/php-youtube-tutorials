<?php

$a = "bear";
$$a = "cow"; // $bear = "cow"

echo "<div>" . $a . "</div>";
echo "<div>" . $$a . "</div>";

$mouse  = "Small";
$animal = "mouse";

echo "<div>" . $$animal . "</div>"; // $$animal => $"mouse" $mouse

$breed                  = "German_Shepherd";
$German_Shepherd        = "Canis_Lupus_Familiaris"; // Belongs to this subspecies
$Canis_Lupus_Familiaris = "Canis_Lupus";            // Belongs to this species
$Canis_Lupus            = "Canis";                  // Belongs to this genus
$Canis                  = "Canidae";                // Belongs to this family
$Canidae                = "Carnivora";              // Belongs to this order
$Carnivora              = "Mammalia";               // Belongs to this class
$Mammalia               = "Chordata";               // Belongs to this phylum
$Chordata               = "Animalia";               // Belongs to this kingdom

echo "<div>Breed: "      . $breed . "</div>";
echo "<div>Subspecies: " . $$breed . "</div>";
echo "<div>Species: "    . $$$breed . "</div>";
echo "<div>Genus: "      . $$$$breed . "</div>";
echo "<div>Family: "     . $$$$$breed . "</div>";
echo "<div>Order: "      . $$$$$$breed . "</div>";
echo "<div>Class: "      . $$$$$$$breed . "</div>";
echo "<div>Phylum: "     . $$$$$$$$breed . "</div>";
echo "<div>Kingdom: "    . $$$$$$$$$breed . "</div>";