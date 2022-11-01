<?php
require_once("Author.php");

use Authors\Author;

$data = [
    "first_name" => "Dino",
    "last_name"  => "Cajic",
    "email"      => "dino@example.com"
];

$author = new Author;
$author->insert($data);