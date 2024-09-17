<?php
include_once('connection.php');
session_start();
$user=$_SESSION['user_details'];

$name=$user['user_name'];
$u_id=$user['u_id'];
$address=$user['address'];
$mobile=$user['mobile_number'];

$cart=$_SESSION['cart'];
for($i=0;$i<count($cart);$i++)
{
    $pid=$cart[$i];
    $cmd="insert into orders(user_id,p_id,user_name,user_address,user_mobile) values($u_id,$pid,'$name','$address','$mobile')";
    $sql=mysqli_query($conn,$cmd);
}
if($sql)
    {
        echo"<h1>successful!</h1>";
        $_SESSION['cart']=array();
    }
    else
    {
        echo"error";
    }
?>