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

$sql = "INSERT INTO authors (first_name, last_name, email) 
                VALUES (?, ?, ?)";

$statement = $mysqli->prepare( $sql );

$first_name = "Dino";
$last_name  = "Cajic";
$email      = "dino@example.com";

$statement->bind_param("sss", $first_name, $last_name, $email);
$statement->execute();

// New Code Start
$first_name = "John";
$last_name  = "Johnson";
$email      = "john@example.com";
$statement->execute();
// New Code End

$statement->close();
$mysqli->close();