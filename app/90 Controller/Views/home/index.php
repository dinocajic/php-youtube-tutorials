<?php
namespace Views\Home;

class HomeView
{
    public function index(): string
    {
        $result  = '<a href="index.php?page=authors">View All Authors</a> | ';
        $result .= '<a href="index.php?page=create">Create Author</a>';

        return $result;
    }
}