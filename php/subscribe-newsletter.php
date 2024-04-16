<?php
    //Connect to DB
    require('../php/db.php');
    
    //Insert new subscribers
    $subscriberEmail = $_POST["subscriberEmail"];
    mysqli_query($connect, "INSERT INTO `subscribers` (sub_email) VALUES ('$subscriberEmail')");

    //Disconnect DB
    mysqli_close($connect);
?>