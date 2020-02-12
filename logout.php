<?php
    // write your code here
    ob_start();
    session_start();
    session_destroy();
    
    header('location:login.php');
?>
