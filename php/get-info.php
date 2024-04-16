<!-- Get info about user -->
<?php
    $id = $_SESSION["id"];

    $user_mail;
    $user_firstn;
    $user_lastn;

    //Connect to DB
    require('db.php');

    //Retrive data
    $select_query = "SELECT `first_name`, `last_name`, `email` FROM `users` WHERE `user_id` = '$id'";
    $result = mysqli_query($connect, $select_query);

    //Remeber data
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_mail = $row['email'];
        $user_firstn = $row['first_name'];
        $user_lastn = $row['last_name'];
    } else {
        echo "Erorr occured!"; //To be edited
    }
?>