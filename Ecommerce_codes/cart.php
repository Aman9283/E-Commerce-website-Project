<?php

session_start();
$pid=$_GET['pid'];
$cart=$_SESSION['cart'];

if(!in_array($pid,$cart))
{
    array_push($cart,$pid);
    $li=implode(',',$cart);
    print_r($li);
    $_SESSION['cart']=$cart;
}

header('location:client_view_products.php');

?>