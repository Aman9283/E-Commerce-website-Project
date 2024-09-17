<?php

session_start();
$cart=$_SESSION['cart'];
$pid=$_GET['pid'];
$ind=array_search($pid,$cart);
unset($cart[$ind]);
print_r($cart);
$_SESSION['cart']=$cart;
header('location:view_cart.php');

?>
