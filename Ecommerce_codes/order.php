<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
</body>
</html>

<?php

include_once('connection.php');
$cmd="select * from orders";
$sql=mysqli_query($conn,$cmd);

$t_rows=mysqli_num_rows($sql);
echo "<div class='d-flex justify-content-center bg-secondary text-white'> <h1> Order List </h1> </div>";

echo "
<div class='table p-3 '>
    <table border='3' class='table table-striped'>
        <tr>
        <th> order id </th>
        <th> user id </th>
        <th> product id </th>
        <th> user name </th>
        <th> user address </th>
        <th> mobile number </th>
        </tr>
</div>        
    ";
for($i=0;$i<$t_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql);
    $o_id=$row['order_id'];
    $u_id=$row['user_id'];
    $pid=$row['p_id'];
    $name=$row['user_name'];
    $address=$row['user_address'];
    $mobile=$row['user_mobile'];
    echo "
    <tr>
    <td> $o_id </td>
    <td> $u_id </td>
    <td> $pid </td>
    <td> $name </td>
    <td> $address </td>
    <td> $mobile </td>
";
}

?>