<?php
require_once("./Author.php");

use Authors\Author;

$page   = $_GET['page'];
$method = $_POST['_method'];

if ( $page == "author" ) {
    if ( $method == "put" ) {
        $author = new Author;
        $update_success = $author->update($_POST);

        if ( $update_success ) {
            header("Location: SelectAuthor.php");
            die();
        } else {
            die("Could not update");
        }
    }
}