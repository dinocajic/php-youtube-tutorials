<?php

if ( isset($_GET['first_name']) && isset($_GET['last_name']) ) {
    echo $_GET['first_name'] . " " . $_GET['last_name'];
} else {
    echo "You must have both the first_name and last_name defined";
}

