<?php
    // write your code here
    require_once 'config.php';
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $query = "Select userName from tblUsers where userName = '$username'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)>0){
        header('location:register.php?result=userexists');
    }
    else{
        $query = "Insert into tblUsers (userName,password) "."values('$username','$password')";
        $result = mysqli_query($conn, $query);
    
        if ($result == 1) {
        header('location:register.php?result=success');
    } else {
        header('location:register.php?result=fail');
    }
}
    
?>
