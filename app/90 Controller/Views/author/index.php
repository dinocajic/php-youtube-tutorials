<?php
namespace Views\Author;

class IndexView
{
    public function index( array $authors ): string
    {
        $result = '';

        foreach( $authors as $author )
        {
            $result .= '<div>';
            $result .= '<a href="index.php?page=author&author_id=' . $author['id'] . '">';
            $result .= $author['id'] . ": " . $author['first_name'] . " " . $author['last_name'];
            $result .= '</a>';
            $result .= '</div>';
        }

        return $result;
    }
}