<!-- Logout PHP -->
<?php

    // Destroy the session
    session_start();
    if (session_destroy()){
        header("location: ../index/index.php");
    }
?>