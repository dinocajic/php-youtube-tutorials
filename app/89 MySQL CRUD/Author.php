<?php
namespace Authors;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("DB.php");

use Database\DB;

class Author
{
    public function insert( array $author )
    {
        $sql = "INSERT INTO authors (first_name, last_name, email) 
                VALUES (?, ?, ?)";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );
        $statement->bind_param("sss", $author['first_name'], $author['last_name'], $author['email']);
        $statement->execute();

        $error = $statement->error;

        $statement->close();
        $db->close();

        if ( $error ) {
            return false;
        }

        return true;
    }

    public function select_all()
    {
        $sql = "SELECT * FROM authors";

        $db = new DB;
        $mysqli = $db->_connection;

        $results = $mysqli->query( $sql );
        $db->close();

        return $results->fetch_all(MYSQLI_ASSOC);
    }

    public function select( int $id )
    {
        $sql = "SELECT * FROM authors WHERE id = " . $id;

        $db = new DB;
        $mysqli = $db->_connection;

        $results = $mysqli->query( $sql );
        $row = $results->fetch_assoc();

        $db->close();

        return $row;
    }

    public function update( array $author )
    {
        $sql = "UPDATE authors SET first_name = ?, last_name = ?, email = ? WHERE id = ?";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );
        $statement->bind_param(
            "sssi",
            $author['first_name'],
            $author['last_name'],
            $author['email'],
            $author['id']
        );
        $statement->execute();
        $error = $statement->error;

        $statement->close();
        $db->close();

        if ( $error ) {
            return false;
        }

        return true;
    }

    public function update_email( array $author )
    {
        $sql = "UPDATE authors SET email = ? WHERE id = ?";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );
        $statement->bind_param(
            "si",
            $author['email'],
            $author['id']
        );
        $statement->execute();
        $error = $statement->error;

        $statement->close();
        $db->close();

        if ( $error ) {
            return false;
        }

        return true;
    }

    public function delete( array $author )
    {
        $sql = "DELETE FROM authors WHERE id = ?";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );
        $statement->bind_param(
            "i",
            $author['id']
        );
        $statement->execute();
        $error = $statement->error;

        $statement->close();
        $db->close();

        if ( $error ) {
            return false;
        }

        return true;
    }
}