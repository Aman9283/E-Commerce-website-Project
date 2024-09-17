<!doctype html>
<html lang=en>
<head>
<link rel=stylesheet href=bootstrap.min.css>
</head>
<body>
    <div class='d-flex justify-content-around bg-light'>
        <h1><a class='btn btn-primary' href='client_view_products.php'> Go Back To Products</a></h1>
        <h1> Subtotal= <span id='price' class='text-danger'> </span>Rs </h1>
        <a href='place_order.php'>
        <h1 class='btn btn-warning'> Proceed to Buy( <span> <?php session_start(); $x=count($_SESSION['cart']); echo $x; ?> </span> items)</h1>
        </a>
    </div>
</body>
</html>

<?php

$cart=$_SESSION['cart'];

$isEmpty=empty($cart);
if($isEmpty)
{
    echo <div class='d-flex justify-content-center vh-100 align-items-center bg-secondary'> <h1> Nothing to Show here! </h1> </div>;
    die;
}

include_once('connection.php');
$li=implode(',',$cart);
$t_price=0;
$sql=mysqli_query($conn,select * from products where pid in ($li));
$no_of_rows=mysqli_num_rows($sql);

echo <div class='d-flex m-5'>;
for($i=1;$i<=$no_of_rows;$i++)
{
    $rows= mysqli_fetch_assoc($sql);
    $pid=$rows['pid'];
    $pname=$rows['pname'];
    $price=$rows['price'];
    $details=$rows['details'];
    $imgn=$rows['img'];
    $t_price=$t_price+$price;
    echo 
    <div class='m-2 border bg-light'>
        <div class='img-thumbnail'>
            <img src='$imgn' width='100%' height='250vh'>
        </div>
        <div class=' text-center'>
            <h2 class='mt-3 text-uppercase'> $pname </h2>
            <h3 class='mt-3'> $$price </h3>
            <h5 class='text-muted'> $details </h5>
        </div>
        <div>
            <a href='remove_cart.php?pid=$pid'>
            <button class='btn btn-danger w-100 mt-3'> Remove Cart</button>
            </a>
        </div>
    </div> 
    ;
    
}
echo </div>;
echo 
<script>  document.getElementById('price').innerHTML='$t_price' </script>
;
?>