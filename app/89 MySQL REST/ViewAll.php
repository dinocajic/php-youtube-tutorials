<?php
require_once("./Author.php");

use Authors\Author;

$author = new Author;
$authors = $author->select_all();

foreach( $authors as $author ) {
    ?>
    <div>
        <a href="index.php?page=author&author_id=<?php echo $author['id']; ?>">
            <?php echo $author['id'] . ": " . $author['first_name'] . " " . $author['last_name']; ?>
        </a>
    </div>
    <?php
}
