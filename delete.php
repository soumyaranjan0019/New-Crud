<?php
    include "connection.php";

    $sl_no = $_GET['srs'];

    $sql = "DELETE FROM srs WHERE sl_no = '$sl_no'";

    if(mysqli_query($conn,$sql))
    {
        header("location:crud2.php");
    }
?>