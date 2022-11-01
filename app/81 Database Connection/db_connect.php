<?php
$server   = "localhost";
$username = "admin";
$password = "E9bIyRDwzidT";
$database = "dino_test_db";

$connection = new mysqli( $server, $username, $password, $database );

if ( $connection->connect_error ) {
    die( $connection->connect_error );
}

$sql = "CREATE DATABASE dino_test_db";

if ( $connection->query($sql) === TRUE ) {
    echo "Database created successfully";
} else {
    die($connection->error);
}

echo "Connection established successfully";