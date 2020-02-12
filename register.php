<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register - User Registration and Login using PHP</title>
    </head>
    <body>
        <?php
            // include header file here
            require_once 'header.php';
        ?>
        
        <h2>Register</h2>
        
        <form action="register1.php" method="post">
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
                    <td colspan="2"><input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>
        
        <?php
            // PHP code to display messages to the user
        if(isset($_REQUEST['result'])){
            if($_REQUEST['result']=="userexists"){
                echo 'This user name is already taken';
            }
            else if($_REQUEST['result']=="success"){
                echo 'New user created';
            }
            else if($_REQUEST['result']=="fail"){
                echo 'New user not created';
            }
        }
        ?>
    </body>
</html>
