<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
</body>
</html>

<?php

//print_r($_POST);
$name=$_POST['pname'];
$price=$_POST['price'];
$details=$_POST['details'];

$file_name=date("y_m_d_h_i_sa").".jpg";
move_uploaded_file($_FILES['img']['tmp_name'],$file_name);

include_once("connection.php");

$sql_status=mysqli_query($conn,"insert into products(pname,price,details,img) values('$name',$price,'$details','$file_name')");


if($sql_status)
{
    echo "<div class='d-flex justify-content-center align-items-center vh-100 '> <h1> Product '$name' uploaded successfully! <br><a href='view_product.php'> View Products </a> <br>
    <a href='upload.html'>Upload more products</a> </h1></div>";
}
else
{
    echo "error!";
}
echo "<a href='view_product.php'>View Products</a>";

?>