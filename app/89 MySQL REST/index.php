<?php
require_once("./Author.php");

use Authors\Author;

if ( !isset($_GET['page']) ) {
    ?>
    <a href="index.php?page=authors">View All Authors</a> |
    <a href="index.php?page=create">Create Author</a>
    <?php
    die();
}

$page   = $_GET['page'];

if ( $page == "create" ) {
    header("Location: Create.php");
    die();
}

if ( $page == "authors" ) {
    header("Location: ViewAll.php");
    die();
}

if ( $page == "author" && isset($_GET['author_id']) ) {
    header("Location: Show.php?author_id=" . $_GET['author_id']);
    die();
}

if ( $page == "author" ) {
    if ( isset($_POST['_method']) && $_POST['_method'] == "put" ) {
        $author = new Author;
        $update_success = $author->update($_POST);

        if ( $update_success ) {
            header("Location: index.php?page=author&author_id=" . $_POST['id']);
            die();
        } else {
            die("Could not update");
        }
    }

    if ( isset($_POST['_method']) && $_POST['_method'] == "delete" ) {
        $author = new Author;
        $delete_success = $author->delete($_POST);

        if ( $delete_success ) {
            header("Location: index.php?page=authors");
            die();
        } else {
            die("Could not delete");
        }
    }

    if ( isset($_POST['submit']) ) {
        $author = new Author;
        $insert_success = $author->insert($_POST);

        if ( $insert_success ) {
            header("Location: index.php?page=authors");
            die();
        } else {
            die("Could not insert");
        }
    }
}