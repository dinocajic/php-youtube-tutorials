<?php

// Validation Filter Examples
var_dump( filter_var("dinoaexample.com", FILTER_VALIDATE_EMAIL) ); // false
var_dump( filter_var("dino@example.com", FILTER_VALIDATE_EMAIL) ); // dino@example.com

var_dump( filter_var(true, FILTER_VALIDATE_BOOLEAN) ); // true
var_dump( filter_var(false, FILTER_VALIDATE_BOOLEAN) ); // false

var_dump( filter_var("192.168.1.10", FILTER_VALIDATE_IP) ); // 192.168.1.10
var_dump( filter_var("78.123.186.65", FILTER_VALIDATE_IP) ); // 78.123.186.65
var_dump( filter_var("78.123.186", FILTER_VALIDATE_IP) ); // false
var_dump( filter_var("6AAA:1111:222:3333:4444:5555:678:778", FILTER_VALIDATE_IP) ); // false

var_dump( filter_var("12:34:F4:90:4F:9B", FILTER_VALIDATE_MAC) ); // 12:34:F4:90:4F:9B

var_dump( filter_var("https://dinocajic.com", FILTER_VALIDATE_URL) ); // https://dinocajic.com
var_dump( filter_var("https:/dinocajic.com", FILTER_VALIDATE_URL) ); // false
var_dump( filter_var("https:/dinocajic.com", FILTER_VALIDATE_URL) ); // false

// Sanitization Filter Examples
var_dump( filter_var("dino@example.com", FILTER_SANITIZE_EMAIL) ); // dino@example.com
var_dump( filter_var("(dino@example.com)", FILTER_SANITIZE_EMAIL) ); // dino@example.com
var_dump( filter_var("dino#example.com", FILTER_SANITIZE_EMAIL) ); // dino#example.com

$sanitized = filter_var("dino@example.com", FILTER_SANITIZE_EMAIL);
if ( filter_var($sanitized, FILTER_VALIDATE_EMAIL) !== false) {
    echo "Valid email address";
}

var_dump( filter_var("Dino's Story", FILTER_SANITIZE_ADD_SLASHES) ); // Dino\'s Story

var_dump( filter_var("Dino's <strong>Story</strong>", FILTER_SANITIZE_STRING) ); // Dino&#39;s Story

var_dump( filter_var("https://dinocajic.com", FILTER_SANITIZE_URL) ); // https://dinocajic.com

var_dump( filter_var(true, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // true
var_dump( filter_var(false, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // false
var_dump( filter_var(0, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // false
var_dump( filter_var("off", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // false
var_dump( filter_var("no", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // false
var_dump( filter_var("yes", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // true
var_dump( filter_var(35, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ); // null

var_dump( filter_var("dino@example.com", FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE) ); // dino@example.com
var_dump( filter_var("dinoexample.com", FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE) ); // null