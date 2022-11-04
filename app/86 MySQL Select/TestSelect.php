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

$sql = "SELECT * FROM authors";

$results = $mysqli->query( $sql );

if ( $results->num_rows > 0 ) {
    while( $row = $results->fetch_assoc() ) {
        var_dump($row);
    }
} else {
    echo "No results";
}

$mysqli->close();