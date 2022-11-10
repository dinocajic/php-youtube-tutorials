<?php
namespace Controllers\Author;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("Models/Author.php");
require_once("Views/author/create.php");
require_once("Views/author/edit.php");
require_once("Views/author/index.php");
require_once("Views/author/show.php");

use Models\Author;
use Views\Author\CreateView;
use Views\Author\EditView;
use Views\Author\IndexView;
use Views\Author\ShowView;

class AuthorController
{
    public function index()
    {
        $author = new Author;
        $authors = $author->select_all();

        $index_view = new IndexView;
        echo $index_view->index($authors);
    }
    
    public function create()
    {
        $home_view = new CreateView;
        echo $home_view->index();
    }

    public function store( array $author_details )
    {
        $author = new Author;
        $insert_success = $author->insert( $author_details );

        var_dump($author_details);

        if ( $insert_success ) {
            header("Location: index.php?page=authors");
            die();
        } else {
            die("Could not insert");
        }
    }

    public function show( int $id )
    {
        $author = new Author;
        $show_author = $author->select( $id );

        $show_view = new ShowView;
        echo $show_view->index($show_author);
    }

    public function edit( int $id )
    {
        $author = new Author;
        $edit_author = $author->select( $id );

        $edit_view = new EditView;
        echo $edit_view->index($edit_author);
    }

    public function update( array $author_details )
    {
        $author = new Author;
        $update_success = $author->update( $author_details );

        if ( $update_success ) {
            header("Location: index.php?page=edit_author&author_id=" . $author_details['id']);
            die();
        } else {
            die("Could not update");
        }
    }

    public function destroy( array $author_details )
    {
        $author = new Author;
        $delete_success = $author->delete( $author_details );

        if ( $delete_success ) {
            header("Location: index.php?page=authors");
            die();
        } else {
            die("Could not delete");
        }
    }
}