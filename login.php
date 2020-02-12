<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - User Registration and Login using PHP</title>
    </head>
    <body>
        <?php
            // include header file here
            require_once 'header.php';
        ?>
        
        <h2>Login</h2>
        
        <form action="login1.php" method="post">
            <table style="margin:0 auto; width:30%;">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        
        <?php
            // PHP code to display the message back to the user
        if(isset($_REQUEST['result'])){
            if($_REQUEST['result']=="fail")
                echo '<p>Login failed, Please try again.</p>';
        }
        ?>
    </body>
</html>
