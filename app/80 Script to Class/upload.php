<?php
require_once("ImageUpload.php");

$image_upload = new Files\Uploads\ImageUpload( $_FILES['file_name'] );
$image_upload->process_upload();