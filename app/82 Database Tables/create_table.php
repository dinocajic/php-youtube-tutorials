<?php
$server   = "localhost";
$username = "admin";
$password = "E9bIyRDwzidT";
$database = "dino_test_db";

$connection = new mysqli( $server, $username, $password, $database );

if ( $connection->connect_error ) {
    die( $connection->connect_error );
}

$sql = "CREATE TABLE users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(255),
            last_name VARCHAR(255),
            email VARCHAR(255),
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                       ON UPDATE CURRENT_TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($connection->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo $connection->error;
}

echo "Connection established successfully";