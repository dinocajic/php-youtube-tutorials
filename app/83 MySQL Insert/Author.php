<?php
namespace Authors;

require_once("DB.php");

use Database\DB;

class Author
{
    public function insert( array $data )
    {
        $sql = "INSERT INTO authors (first_name, last_name, email) 
                VALUES (
                        '" . $data['first_name'] . "', 
                        '" . $data['last_name'] . "', 
                        '" . $data['email'] .  "')";

        $db = new DB;
        $status = $db->insert($sql);
        $db->close();

        echo $status;
    }
}