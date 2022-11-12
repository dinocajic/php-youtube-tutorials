<?php
session_start();

if ( ! isset($_SESSION['total']) ) {
    $_SESSION['total'] = 0;
}

echo "The total price for items in your cart is: " . $_SESSION['total'];