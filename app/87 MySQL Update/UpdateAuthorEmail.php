<?php
require_once("./Author.php");

use Authors\Author;

$author = new Author;
$update_author = $author->select(1);
?>

<form action="index.php?page=author" method="post">
    <input type="hidden" name="_method" value="patch">
    <input type="hidden" name="id" value="<?php echo $update_author['id']; ?>">
    <div>
       Update Email Address for <?php echo $update_author['first_name'] . " " . $update_author['last_name']; ?>
    </div>
    <div>
        Email: <input type="text" name="email" value="<?php echo $update_author['email']; ?>">
    </div>
    <div>
        <input type="submit" value="Update">
    </div>
</form>
