<?php
$server   = "localhost";
$username = "admin";
$password = "E9bIyRDwzidT";

$connection = new mysqli( $server, $username, $password );

if ( $connection->connect_error ) {
    die( $connection->connect_error );
}

$sql = "CREATE DATABASE dino_test_db_3";

if ( $connection->query($sql) === TRUE ) {
    echo "Database created successfully";
} else {
    die($connection->error);
}

echo "Connection established successfully";