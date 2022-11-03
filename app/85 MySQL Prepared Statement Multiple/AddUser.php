<?php
require_once("./Author.php");

use Authors\Author;

$authors = [
    [
        "first_name" => "Dino",
        "last_name"  => "Cajic",
        "email"      => "dino@example.com"
    ],
    [
        "first_name" => "Frank",
        "last_name"  => "Josh",
        "email"      => "frank@example.com"
    ],
    [
        "first_name" => "Stewart",
        "last_name"  => "Steven",
        "email"      => "stewart@example.com"
    ],
];

$author = new Author;
$author->insert($authors);