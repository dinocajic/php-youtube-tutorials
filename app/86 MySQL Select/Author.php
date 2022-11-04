<?php
namespace Authors;

require_once("DB.php");

use Database\DB;

class Author
{
    public function insert( array $authors )
    {
        $sql = "INSERT INTO authors (first_name, last_name, email) 
                VALUES (?, ?, ?)";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );

        foreach( $authors as $author ) {
            $statement->bind_param("sss", $author['first_name'], $author['last_name'], $author['email']);
            $statement->execute();
        }

        $statement->close();
        $db->close();
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
}