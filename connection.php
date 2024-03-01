<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "srs";

    $conn = mysqli_connect($server,$user,$password,$database);
    if($conn)
    {
    
    }else{
        echo "DB is not connected.";
    }
?>