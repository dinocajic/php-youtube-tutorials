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

// Insert User
$sql = "INSERT INTO users (first_name, last_name, email) 
                VALUES (?, ?, ?)";

$statement = $mysqli->prepare( $sql );

$first_name = "Dino";
$last_name  = "Cajic";
$email      = "dino@example.com";

$statement->bind_param("sss", $first_name, $last_name, $email);
$statement->execute();

$user_id = $statement->insert_id;

$statement->close();

// Get customer_type_id
$sql = "SELECT id FROM customer_types WHERE type = 'distributor'";

$results = $mysqli->query( $sql );
$row = $results->fetch_assoc();
$customer_type_id = $row['id'];

// Create Customer
$sql = "INSERT INTO customers (user_id, customer_type_id) 
               VALUES (?, ?)";

$statement = $mysqli->prepare( $sql );

$statement->bind_param("ii", $user_id, $customer_type_id);
$statement->execute();

$statement->close();
$mysqli->close();