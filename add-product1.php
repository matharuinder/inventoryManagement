<?php
    // connect with database
    require_once 'config.php';
    
    
    
    // read the values from the fields
    $productName = $_REQUEST['productName'];
    $productPrice = $_REQUEST['productPrice'];
    


    // query to insert into table tbl_products
    $query = "insert into tblProducts (ProducatName, ProductPrice) values ('$productName', $productPrice);";

    // execute query
    $result = mysqli_query($conn, $query);

    if ($result == 1)
    {
        header("location:add-product.php?result=success");
    }
    else
    {
        header("location:add-product.php?result=fail");
    }
?>
