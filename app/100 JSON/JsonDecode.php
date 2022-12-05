<?php

$encoded_json = '{"name":"Dino Cajic","age":102,"email":"dino@example.com","isWriting":true,"tailColor":null}';
$decoded_json = json_decode($encoded_json);

var_dump($decoded_json);

var_dump($decoded_json->name);

$encoded_json = '["Dino Cajic", "Steven Johnson", "Fred Smith"]';
$decoded_json = json_decode($encoded_json);

var_dump($decoded_json);
var_dump($decoded_json[0]);