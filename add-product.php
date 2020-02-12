<?php
    require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product - PHP Application Development Example</title>
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        
        <h2>Add New Product</h2>
        
        <form action="add-product1.php" method="post">
            <table style="margin:0 auto;">
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" name="productName">
                    </td>
                </tr>
                <tr>
                    <td>Product Price:</td>
                    <td>
                        <input type="text" name="productPrice">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add Product">
                    </td>
                </tr>
            </table>
        </form>
        
        <?php
            // to display the messages back to the user
            if (isset($_REQUEST['result']))
            {
                if ($_REQUEST['result'] == "success")
                {
                    echo "<p>Product was added</p>";
                }
                else if ($_REQUEST['result'] == "fail")
                {
                    echo "<p>Product was not added</p>";
                }
            }
        ?>
    </body>
</html>
