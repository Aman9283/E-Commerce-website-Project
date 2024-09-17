<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
</body>
</html>

<?php

include_once ('connection.php');
$uname=$_POST['uname'];
$upwd=$_POST['upwd'];
$address=$_POST['address'];
$tel=$_POST['telphn'];

$sql=mysqli_query($conn,"insert into client (user_name,password,address,mobile_number) values('$uname','$upwd','$address',$tel)");
if ($sql)
{
    echo "<h2 class='d-flex justify-content-center align-items-center vh-100 bg-light'>registration successful! <a class=''href='login.html'>  click here to login </a> </h2>";
    
}
else
{
    echo "<h2 class='d-flex justify-content-center align-items-center vh-100 bg-light'> registration failed! <br> <a href='registration.html'> Try Again! </a> </h2>";
}
?>