<?php
session_start();

if ( ! isset($_SESSION['total']) ) {
    $_SESSION['total'] = 100;
} else {
    $_SESSION['total'] += 100;
}

?>
Item has been added to the cart
<a href="cart.php">Visit the cart</a>
