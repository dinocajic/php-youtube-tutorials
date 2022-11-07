<?php
require_once("./Author.php");

use Authors\Author;

if ( !isset($_GET['page']) ) {
    ?>
    <a href="DeleteAuthor.php">Delete Author</a>
    <?php
    die();
}

$page   = $_GET['page'];
$method = $_POST['_method'];

if ( $page == "author" ) {
    if ( $method == "delete" ) {
        $author = new Author;
        $delete_success = $author->delete($_POST);

        if ( $delete_success ) {
            header("Location: DeleteAuthor.php");
            die();
        } else {
            die("Could not delete");
        }
    }
}