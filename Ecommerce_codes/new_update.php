<?php

include_once('connection.php');
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$details=$_POST['details'];

$file_name=date("y_m_d_h_i_sa").".jpg";
move_uploaded_file($_FILES['img']['tmp_name'],$file_name);
echo "<br>$file_name";

$sql=mysqli_query($conn,"update products set pname='$pname',price=$price,details='$details',img='$file_name' where pid=$pid");
/*if($sql)
{
    echo "updated successfully";
}
else
{
    echo "error!";
}*/
header('location:view_product.php');


?>