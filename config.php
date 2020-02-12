<?php
    // write the code to connect with the database
    $host = 'localhost';
    $user = 'matinder_admin';
    $pswd = 'Vx2wiSRZm!@#';
    $dbName = 'matinder_mybd';
    
    $conn = mysqli_connect($host, $user, $pswd, $dbName);
    
    if(empty($conn)){
        die("Connection failed: ". mysqli_error($conn));
    }
    
    
    