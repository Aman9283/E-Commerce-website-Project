<?php

session_start();
if(isset($_SESSION['login']))
{
    if($_SESSION['login']=='failed')
    {
        echo "invalid attempt";
        echo "<a href='login.html' click here for login </a>";
        die;
    }
    else
    {
        
    }
}
else
{
        echo "invalid attempt";
        echo "<a href='login.html' click here for login </a>";
        die;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <style>
        h1{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            overflow-x: hidden;
        }
    </style>

</head>
<body>
    
</body>
</html>

<?php

include_once("connection.php");

$sql=mysqli_query($conn,"select * from products");
 
$no_of_rows=mysqli_num_rows($sql);

echo "<h1 class='text-center bg-secondary text-white'> Products Available  </h1>";
echo "<a class='btn btn-danger' href='logout.php'> Log Out </a>";
echo "<a class='btn btn-primary' href='view_cart.php'> View Carts </a>";
echo "<h3 id='prize'> </h3>";

echo "<div class='row w-100 m-5'>";
for($i=1;$i<=$no_of_rows;$i++)
 {
    $rows= mysqli_fetch_assoc($sql);
    $pid=$rows['pid'];
    $pname=$rows['pname'];
    $price=$rows['price'];
    $details=$rows['details'];
    $imgn=$rows['img'];

    echo "
    <div class='col-3 w-25 m-2 p-2 border bg-light'>
        <div class=''>
            <img src='$imgn' width='100%' height='250vh'>
        </div>
        <div class=' text-center'>
            <h2 class='mt-3 text-uppercase'> $pname </h2>
            <h3 class='mt-3'> $$price </h3>
            <h5 class='text-muted'> $details </h5>
        </div>
        <div>
            <a href='cart.php?pid=$pid'>
            <button class='btn btn-warning w-100 mt-3'> Add To Cart</button>
            </a>
        </div>
    </div> 
    ";

 } 
echo "</div>";

?>