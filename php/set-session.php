<?php
    //Get User ID
    $id_select_query = "SELECT `user_id` FROM `users` WHERE `email` = '$email' LIMIT 1";
    $id_result = mysqli_query($connect, $id_select_query);
    if(mysqli_num_rows($id_result) > 0){
        $row = mysqli_fetch_assoc($id_result);
        $id = $row["user_id"];
    }

    //Set Session
    $_SESSION["id"] = $id;
    header("location: ../index/index.php");
?>