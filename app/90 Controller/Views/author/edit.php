<?php
namespace Views\Author;

class EditView
{
    public function index( array $author ): string
    {
        $result  = '<form action="index.php?page=author" method="post">';
        $result .= '<input type="hidden" name="_method" value="put">';
        $result .= '<input type="hidden" name="id" value="' . $author['id'] . '">';
        $result .= '<div>';
        $result .= 'First Name: <input type="text" name="first_name" value="' . $author['first_name'] . '">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Last Name: <input type="text" name="last_name" value="' . $author['last_name'] . '">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Email: <input type="text" name="email" value="' . $author['email'] . '">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= '<input type="submit" value="Update">';
        $result .= '</div>';
        $result .= '</form>';

        $result .= '<form action="index.php?page=author" method="post">';
        $result .= '<input type="hidden" name="_method" value="delete">';
        $result .= '<input type="hidden" name="id" value=' . $author['id'] . '">';
        $result .= '<input type="submit" value="Delete">';
        $result .= '</div>';
        $result .= '</form>';

        return $result;
    }
}