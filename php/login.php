<!-- Validation System -->
<?php 
    session_start();
    require('db.php');

    // Check if login is succesful, if not > [echo] 
    if(isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $email = mysqli_real_escape_string($connect, $email);
        $pwd = trim($_POST['pass']);
        $pwd = mysqli_real_escape_string($connect, $pwd);

        //Get the value
        $select_query = "SELECT `password` FROM `users` WHERE `email` = '$email' LIMIT 1";
        $result = mysqli_query($connect, $select_query);
        $get_pwd_hash = mysqli_fetch_assoc($result);

        //Check if value not null
        if($get_pwd_hash == null){
            echo "Wrong Credentials!"; // To be edited
        } else {
            if(password_verify($pwd, $get_pwd_hash["password"])){
                //Set Session
                include('../php/set-session.php');
            } else {
                echo "Wrong Credentials!"; // To be edited
            }
        }
    } else {
        header("location: ../index/registration.php"); // If you try to go to the validation script > redirect to Register Page
    }

    //Close connection to db
    mysqli_close($connect);
?>