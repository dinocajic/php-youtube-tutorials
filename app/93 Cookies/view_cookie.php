<?php

if ( isset($_COOKIE["full_name"]) ) {
    echo "Hello " . $_COOKIE["full_name"];
} else {
    echo "Cookie not set.";
}
