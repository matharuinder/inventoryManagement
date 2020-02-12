<?php
    require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - PHP Application Development Example</title>
        
  
        <style>
            #wrapper
            {
                margin: 0 auto;
                width:30%;
            }
            
            #products
            {
                margin: 0 auto;
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
            }

            #products td, #products th
            {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #products tr:nth-child(even) { background-color: #f2f2f2; }

            #products th
            {
                padding: 12px;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        
        <h2>View Products</h2>
        
        <div id='wrapper'>
        <?php
            if (isset($_REQUEST['result']))
            {
                if ($_REQUEST['result'] == "updatesuccess")
                {
                    echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Product was successfully updated.</div>";
                }
                else if ($_REQUEST['result'] == "deletesuccess")
                {
                    echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Product was successfully deleted.</div>";
                }
                else if ($_REQUEST['result'] == "deletefail")
                {
                    echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Product was not deleted.</div>";
                }
            }
        ?>
        </div>
        
        <table id="products">
            <tr>
                <th>S. No.</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
            
            <?php
                // connect with database
                require_once 'config.php';
                
                
                // select everything from the products table
                $query = "select * from tblProducts";
                $result = mysqli_query($conn, $query);
                
                // check if rows were fetched
                if (mysqli_num_rows($result) > 0)
                {
                    // loop through each row
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['ProducatID'] . "</td>";
                        echo "<td>" . $row['ProducatName'] . "</td>";
                        echo "<td>" . $row['ProductPrice'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>
