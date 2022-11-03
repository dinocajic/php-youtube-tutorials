<?php
namespace Authors;

require_once("DB.php");

use Database\DB;

class Author
{
    public function insert( array $data )
    {
        $sql = "INSERT INTO authors (first_name, last_name, email) 
                VALUES (?, ?, ?)";

        $db = new DB;
        $mysqli = $db->_connection;

        $statement = $mysqli->prepare( $sql );
        $statement->bind_param("sss", $data['first_name'], $data['last_name'], $data['email']);
        $statement->execute();

        $statement->close();
        $db->close();
    }
}