<?php
require_once("./Author.php");

use Authors\Author;

$author = new Author;
$authors_to_delete = $author->select_all();

foreach( $authors_to_delete as $author_to_delete )
{
    ?>
    <form action="index.php?page=author" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="id" value="<?php echo $author_to_delete['id']; ?>">
        <div>
            <?php
            echo $author_to_delete['first_name'] . " "
                . $author_to_delete['last_name'] . " "
                . $author_to_delete['email'];
            ?>

            <input type="submit" value="Delete">
        </div>
    </form>
    <?php
}

