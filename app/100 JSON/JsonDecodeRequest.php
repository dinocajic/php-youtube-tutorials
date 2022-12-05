<?php

$json_encoded = file_get_contents('php://input');
$json_decoded = json_decode( $json_encoded );
var_dump( $json_decoded );