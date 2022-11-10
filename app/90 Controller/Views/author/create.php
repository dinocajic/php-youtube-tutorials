<?php
namespace Views\Author;

class CreateView
{
    public function index(): string
    {
        $result  = '<form action="index.php?page=author" method="post">';
        $result .= '<div>';
        $result .= 'First Name: <input type="text" name="first_name">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Last Name: <input type="text" name="last_name">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= 'Email: <input type="text" name="email">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= '<input type="submit" name="submit" value="Create">';
        $result .= '</div>';
        $result .= '</form>';

        return $result;
    }
}