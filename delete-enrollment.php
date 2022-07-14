<?php
    //database connection
    require_once('logics/dbconnection.php');
    $sqlDeleteStudent = mysqli_query($conn,
     "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
    if($sqlDeleteStudent)
    {
        echo "user deleted successfully";
        header('location:students.php');
    }
    else
    {
        echo "fatal error occured.Please try again";
    }
?>