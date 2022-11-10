<?php

$mysqli = new mysqli(
    "localhost",
    "admin",
    "E9bIyRDwzidT",
    "dino_test_db"
);

if ( $mysqli->connect_error ) {
    die( $mysqli->connect_error );
}

$sql = "SELECT 
            users.first_name, 
            users.last_name, 
            users.email,
            customer_types.type
        FROM users 
        OUTER JOIN customers ON users.id = customers.user_id
        OUTER JOIN customer_types ON customer_types.id = customers.customer_type_id";

$results = $mysqli->query( $sql );

if ( $results->num_rows > 0 ) {
    while( $row = $results->fetch_assoc() ) {
        var_dump($row);
    }
} else {
    echo "No results";
}

$mysqli->close();