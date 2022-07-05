<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="zalego";

    $conn = mysqli_connect($server,$username,$password,$database);

    if($conn)
    {
        echo 'Database connection success';

    }
    else
    {
        echo 'error occured' . mysqli_connect($conn);
    }
?>  