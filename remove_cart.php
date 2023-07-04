<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $id = $_REQUEST['id'];

    $length = count($cart);
    for ($i = 0; $i <= $length; $i++) {
        if ($cart[$i] == $id) {
            unset($cart[$i]);
        }
    }

    $_SESSION['cart'] = $cart;
}
header("Location: cart.php");
