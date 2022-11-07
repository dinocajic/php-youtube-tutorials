<?php
require_once("./Author.php");

use Authors\Author;

if ( !isset($_GET['page']) ) {
    ?>
    <a href="UpdateEntireAuthor.php">Update Entire Author</a> |
    <a href="UpdateAuthorEmail.php">Update Author Email</a>
    <?php
    die();
}

$page   = $_GET['page'];
$method = $_POST['_method'];

if ( $page == "author" ) {
    if ( $method == "put" ) {
        $author = new Author;
        $update_success = $author->update($_POST);

        if ( $update_success ) {
            header("Location: UpdateEntireAuthor.php");
            die();
        } else {
            die("Could not update");
        }
    }

    if ( $method == "patch" ) {
        $author = new Author;
        $update_success = $author->update_email($_POST);

        if ( $update_success ) {
            header("Location: UpdateAuthorEmail.php");
            die();
        } else {
            die("Could not update email");
        }
    }
}