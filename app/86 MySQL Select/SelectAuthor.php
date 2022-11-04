<?php
require_once("./Author.php");

use Authors\Author;

$author = new Author;
//var_dump($author->select_all());
var_dump($author->select(1));
