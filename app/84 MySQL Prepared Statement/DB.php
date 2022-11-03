<?php
namespace Database;

use mysqli;

class DB
{
    private string $_server   = "localhost";
    private string $_username = "admin";
    private string $_password = "OOwfvsr2soGW";
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

    public function insert( string $sql ): string
    {
        if ($this->_connection->query($sql) === TRUE) {
            return "Inserted successfully";
        } else {
            return $this->_connection->error;
        }
    }

    public function close()
    {
        $this->_connection->close();
    }
}
