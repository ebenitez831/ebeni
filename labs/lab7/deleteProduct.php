<?php
    include '../../dbConnection.php';
    
    $connection = getDatabaseConnection("ottermart");
    
    $sql = "DELETE FROM om_product
            WHERE productID =  " .$_GET['productId'];
    $statement = $connection->prepare($sql);
    //$statement->execute();
    
    header("Location: admin.php");
?>