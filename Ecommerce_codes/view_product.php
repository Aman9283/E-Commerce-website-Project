<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <style>
        
    </style>

</head>
<body>
    
</body>
</html>

<?php

include('main.html');
include_once("connection.php");

$sql=mysqli_query($conn,"select * from products");
 
$no_of_rows=mysqli_num_rows($sql);

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
            <a href='delete.php?pid=$pid'>
            <button class='btn btn-danger '> Delete </button>
            </a>
            <a href='update.php?pid=$pid'>
            <button class='btn btn-warning text-right'> Update </button>
            </a>
        </div> 
    </div> 
    ";

 } 
echo "</div>";

?>