<?php

// trim()
$string = " Hello There ";
$string = trim($string);
var_dump($string);

// ltrim()
$string = " Hello There ";
$string = ltrim($string);
var_dump($string);

// rtrim()
$string = " Hello There ";
$string = rtrim($string);
var_dump($string);

// htmlspecialchars()
$html = '<script>alert("Hacked");</script>';
$sanitized = htmlspecialchars($html);
var_dump($sanitized);