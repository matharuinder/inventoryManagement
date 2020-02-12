<?php
    // include check_session.php to check if the session exists    
    require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Member's Page - User Registration and Login using PHP</title>
    </head>
    <body>
        <?php
            // include header file here
            require_once 'header.php';
        ?>
        
        <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
        
        <p>This is a secure member's page. It can only be accessed once the user has logged in.</p>
        
        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </body>
</html>
