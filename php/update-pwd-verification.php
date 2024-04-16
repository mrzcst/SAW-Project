<!-- Verify and update password -->
<?php
    //Connection to DB
    session_start();
    require("../php/db.php");

    $session_id = $_SESSION["id"];

    //If Edit is pressed
    if(isset($_POST['submit'])){
        //[trim] - for clearing spaces
        //[mysqli_real_escape_string] - checking for bad input
        $old_pwd = trim($_POST['pass']);
        $old_pwd = mysqli_real_escape_string($connect, $old_pwd);
        $new_pwd = trim($_POST['new-pass']);
        $new_pwd= mysqli_real_escape_string($connect, $new_pwd);
    }

    //Retrive Password
    $select_query = "SELECT `password` FROM `users` WHERE `user_id` = '$session_id' LIMIT 1";
    $result = mysqli_query($connect, $select_query);

    //Remeber password
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_pwd = $row['password'];
    }

    //Check and replace
    if(!password_verify($old_pwd, $user_pwd)){
        echo "Wrong Old Password";
    } else {
        if(password_verify($new_pwd, $user_pwd)){
            echo "You can't use your current password as new password!";
        } else {
            $new_hash = password_hash($new_pwd, PASSWORD_DEFAULT);
            mysqli_query($connect, "UPDATE `users` set `password` = '$new_hash' WHERE `user_id` = '$session_id'");
            echo "Password Changed Succesfully"; // to be modified
        }
    }

    //Close DB connection
    mysqli_close($connect);
?>