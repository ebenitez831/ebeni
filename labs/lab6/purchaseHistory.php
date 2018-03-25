<?php

    
    include '../../dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    $poriductId = $_GET['productId'];
    
    $sql = "SELECT * FROM 'om_product
            NATURAL JOIN om_purchase
            Where productId = :pId";
            
    $np = array();
    
    $np[":pId"] = $productId;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    print_r($records);
    
    echo $records[0]['productName'] . "<br>";
    echo "<img src='" .$record['productImage'] . "'width = 200 /><br/>";
    
    foreach($records as $record){
        
        echo "Purchased Date: " . $record["purchaseDate"] . "<br />";
        echo "Unit Price: " . $record["unitPrice"] . "<br />";
        echo "Quantity: "  . $record["quantity"] . "<br />";
        
    }


?>