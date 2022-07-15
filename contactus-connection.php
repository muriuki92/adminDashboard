<?php
    require_once('logics/dbconnection.php');

    $inputcontactusquery = mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
    while($fetch = mysqli_fetch_array($inputcontactusquery))
    {
        $id = $fetchcontactus['no'];
        $firstName = $fetchcontactus['firstname'];
        $lastName = $fetchcontactus['lastname'];
        $email= $fetchcontactus['email'];
        $phoneNumber = $fetchcontactus['phonenumber'];
        $message = $fetchcontactus['message'];
        $created_at = $fetchcontactus['created_at'];

    }
?>