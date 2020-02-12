<?php
    // write PHP code that checks if a session exists
    ob_start();
    session_start();
    
    if(empty($_SESSION['username']))
        header('location:login.php');