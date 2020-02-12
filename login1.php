<?php
ob_start();
session_start();

    // write your code here
    require_once 'config.php';
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $query = "Select userName from tblUsers where username = '$username' and password = '$password'";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header('location:member.php');
    }
    else
        header('location:login.php?result=fail');
?>
