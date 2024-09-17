<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
</body>
</html>

<?php

include_once('connection.php');

session_start();
$_SESSION['cart']=array();

$tel=$_POST["telphn"];
$upwd=$_POST["upwd"];

$sql=mysqli_query($conn,"select * from client where mobile_number='$tel' && password='$upwd'");

$total_rows=mysqli_num_rows($sql);

if($total_rows==0)
{
    $_SESSION['login']='failed';
    echo "<h1 class='d-flex justify-content-center align-items-center vh-100 bg-light'> invalid syntax!  <a href='login.html'>Try Again</a> </h1>";
}
else
{
    $row=mysqli_fetch_assoc($sql);
    $_SESSION['user_details']=$row;
    $_SESSION['login']='success';
    header('location:client_view_products.php');
}
/*if (($upwd=="$pwd") && ($sql))
    {
        session_start();
        $_SESSION['login']='success';
        header('location:client_view_products.php');
    }
else
    {
        $_SESSION['login']='failed';
        echo "invalid syntax";
    }
 */   
?>