<?php
    session_start();

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    //Redirect back to the previous page
    if(isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: index.php");
    }
?>
