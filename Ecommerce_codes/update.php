<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
            background-color: #c9edb9;
        }
    </style>
</head>
<body>
</body>
</html>

<?php

include_once ('connection.php');

$pid=$_GET['pid'];

$sql=mysqli_query($conn,"select * from products where pid=$pid");
//$sql2=mysqli_query($conn,"update products set ")
   $rows= mysqli_fetch_assoc($sql);
    $pid=$rows['pid'];
    $pname=$rows['pname'];
    $price=$rows['price'];
    $details=$rows['details'];
    $img=$rows['img'];
    
echo "
<div class='d-flex justify-content-center vh-100 align-items-center'>
    <form class='bg-warning p-3' action='new_update.php' method='post' enctype='multipart/form-data'>
            <h2 class='text-center text-success'> Update Table </h2>
            <input class='form-control mt-2' name='pid' value='$pid'>
            <input class='form-control mt-2' type='text' name='pname' value='$pname' placeholder='product name'>
           
            <input class='form-control mt-2' type='text'  name='price' value='$price' placeholder='price'>
            
            <input class='form-control mt-2' name='details' value='$details' placeholder='product discription' >
            
            <input class='form-control mt-2' type='file' accept='image/' name='img' value='$img'>
            
            <input class='btn btn-success form-control mt-2' type='submit' value='update'>
    </form>
</div>
"
?>