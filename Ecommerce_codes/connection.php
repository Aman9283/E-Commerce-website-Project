<?php

$conn=new mysqli('127.0.0.1','root','','acme');
if($conn->connect_error)
    {
        echo "no server";
        die;
    }
?>