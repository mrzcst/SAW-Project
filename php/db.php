<!-- Connect to DATABASE -->
<?php 
    //Connecting...
    $connect = mysqli_connect("localhost", "user", "pwd", "***");

    //If error connecting...
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
    }
?>