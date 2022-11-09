<?php
require_once("./Author.php");

use Authors\Author;

if ( !isset($_GET['author_id']) ) {
    die("You must pass an author");
}

$author = new Author;
$update_author = $author->select( $_GET['author_id'] );
?>

<form action="index.php?page=author" method="post">
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="id" value="<?php echo $update_author['id']; ?>">
    <div>
        First Name: <input type="text" name="first_name" value="<?php echo $update_author['first_name']; ?>">
    </div>
    <div>
        Last Name: <input type="text" name="last_name" value="<?php echo $update_author['last_name']; ?>">
    </div>
    <div>
        Email: <input type="text" name="email" value="<?php echo $update_author['email']; ?>">
    </div>
    <div>
        <input type="submit" value="Update">
    </div>
</form>

<form action="index.php?page=author" method="post">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="id" value="<?php echo $update_author['id']; ?>">
    <input type="submit" value="Delete">
    </div>
</form>