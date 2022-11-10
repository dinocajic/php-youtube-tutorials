<?php
namespace Database;

use mysqli;

class DB
{
    private string $_server   = "localhost";
    private string $_username = "admin";
    private string $_password = "E9bIyRDwzidT";
    private string $_database = "dino_test_db";

    public mysqli $_connection;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->_connection = new mysqli(
            $this->_server,
            $this->_username,
            $this->_password,
            $this->_database
        );

        if ( $this->_connection->connect_error ) {
            die( $this->_connection->connect_error );
        }
    }

    public function close()
    {
        $this->_connection->close();
    }
}
