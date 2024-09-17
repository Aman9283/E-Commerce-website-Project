<?php

include_once ("connection.php");

$pid=$_GET['pid'];

$sql_status=mysqli_query($conn,"delete from products where pid=$pid");
if ($sql_status)
{
    echo "deleted successfully";
    header('location:view_product.php');
}
else
{
    echo "error in sql";
}
