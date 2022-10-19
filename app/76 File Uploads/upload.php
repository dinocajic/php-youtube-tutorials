<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$target_file = "uploads/" . $_FILES["file_name"]["name"];
$temp_file   = $_FILES["file_name"]["tmp_name"];

move_uploaded_file($temp_file, $target_file);