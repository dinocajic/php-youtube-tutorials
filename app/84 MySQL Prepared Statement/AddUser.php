<?php
require_once("Author.php");

use Authors\Author;

$data = [
    "first_name" => "Harrison",
    "last_name"  => "Cajic",
    "email"      => "harrison@example.com"
];

$author = new Author;
$author->insert($data);