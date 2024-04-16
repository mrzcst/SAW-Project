<!-- Verify and update data -->
<?php
    //Connection to DB
    session_start();
    require("../php/db.php");

    $session_id = $_SESSION["id"];

    //If Edit is pressed
    if(isset($_POST['submit'])){
        //[trim] - for clearing spaces
        //[mysqli_real_escape_string] - checking for bad input
        $firstn = trim($_POST['firstname']);
        $firstn = mysqli_real_escape_string($connect, $firstn);
        $lastn = trim($_POST['lastname']);
        $lastn = mysqli_real_escape_string($connect, $lastn);
        $email = trim($_POST['email']);
        $email = mysqli_real_escape_string($connect, $email);
    }

    //Retrive Info
    $select_query = "SELECT `user_id`,  `first_name`, `last_name`, `email` FROM `users` WHERE `user_id` = '$session_id'";
    $result = mysqli_query($connect, $select_query);
    $row = mysqli_fetch_assoc($result);

    //Remeber data
    if(mysqli_num_rows($result) > 0) {
        $user_mail = $row['email'];
        $user_firstn = $row['first_name'];
        $user_lastn = $row['last_name'];
    }

    //Check update_profile [Modified]
    if(!($firstn == null) and !($firstn == $user_firstn)) {
        $user_firstn = $firstn;
    }

    if(!($lastn == null) and !($lastn == $user_lastn)) {
        $user_lastn = $lastn;
    }

    //Even if email is set to unique, I still can update the profile with an existing mail, so I have to check if mail is existing or no
    if(!($email == null) and !($email == $user_mail)) {
        $user_mail = $email;
    }

    //Update info in Database
    mysqli_query($connect, "UPDATE `users` set `first_name` = '$user_firstn', `last_name` = '$user_lastn', `email` = '$user_mail' WHERE `user_id` = '$session_id'");
    header("location: ../php/show_profile.php");

    //Close DB connection
    mysqli_close($connect);
?>