<?php
namespace Views\Author;

class ShowView
{
    public function index( array $author ): string
    {
        $result  = '<div>';
        $result .= 'First Name: ' . $author['first_name'];
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Last Name: ' . $author['last_name'];
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Email: ' . $author['email'];
        $result .= '</div>';
        $result .= '<div>';
        $result .= '<a href="index.php?page=edit_author&author_id=' . $author['id'] . '">Edit</a>';
        $result .= '</div>';

        return $result;
    }
}