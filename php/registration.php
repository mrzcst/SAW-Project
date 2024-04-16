<!-- Register PHP -->
<!-- Modified: Removed mail checking as it is UNIQUE -->
<?php
    session_start();
    require("../php/db.php");

    //If Register is pressed
    if(isset($_POST['submit'])){
        //[trim] - for clearing spaces
        //[mysqli_real_escape_string] - checking for bad input
        $firstn = trim($_POST['firstname']);
        $firstn = mysqli_real_escape_string($connect, $firstn);
        $lastn = trim($_POST['lastname']);
        $lastn = mysqli_real_escape_string($connect, $lastn);
        $email = trim($_POST['email']);
        $email = mysqli_real_escape_string($connect, $email);
        $pwd = trim($_POST['pass']);
        $pwd = mysqli_real_escape_string($connect, $pwd);
        $pwd_confirm = trim($_POST['confirm']);
        $pwd_confirm = mysqli_real_escape_string($connect, $pwd_confirm);

        //Check pwd confirmation
        if(!($pwd === $pwd_confirm)) {
            header("location: ../index/register.php"); // should be modified
        } else {
            //Get the registation time
            $create_dt = date("Y-m-d H:i:s");

            //Creating a hash for pwd
            $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);

            //Insert Query
            $insert_query = "INSERT into users (first_name, last_name, email, password, create_datatime) VALUES ('$firstn', '$lastn', '$email', '$pwd_hash', '$create_dt')";
            $result = mysqli_query($connect, $insert_query);

            //Check $result
            if($result) {
                //Set Session
                include('../php/set-session.php');
            } else {
                    echo "Error, fill all the filds with correct information!"; //To be edited
            }
        }
    }
    //Close connection to db
    mysqli_close($connect);
?>