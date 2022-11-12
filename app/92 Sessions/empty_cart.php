<?php
session_start();

if ( isset($_SESSION['total']) ) {
    unset($_SESSION['total']);
}

var_dump($_SESSION);

?>
The $_SESSION['total'] has been removed
