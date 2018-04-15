<?php
    include '../../dbConnection.php';
    
    $connection = getDatabaseConnection("ottermart");
    
    function getCategories($catId) {
    global $connection;
    
    $sql = "SELECT catId, catName from om_category ORDER BY catName";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["catId"] == $catId)? "selected": ""; 
        echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM om_product WHERE productId = " . $_GET['productId'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE om_product
                SET productName = :productName,
                    productDescription = :productDescription,
                    productImage = :productImage,
                    price = :price,
                    catId = :catId
                WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
        $np[":productId"] = $_GET['productId'];
            
        $statement = $connection->prepare($sql);
        $statement->execute($np);
        

        
    }
    
    
    if(isset ($_GET['productId']))
    {
        $product = getProductInfo();
    }
    
    //print_r($product);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            @import url("styles.css");
        </style>
        
    </head>
    
        
    <body>
        <h1>Update Product</h1>
        
        <form>
            <div class="col-xs-2">
                <input type="hidden" name="productId" value= "<?=$product['productId']?>"/>
                Product name: <input type="text" class = "form-control" value = "<?=$product['productName']?>" name="productName"><br>
                Description: <textarea class="form-control" name="description" cols = 50 rows = 5><?=$product['productDescription']?></textarea><br>
                Price: <input type="text" name="price" class = "form-control" value = "<?=$product['price']?>"><br>
        
                Category: <select class = "form-control" name="catId">
                    <option>Select One</option>
                    <?php getCategories( $product['catId'] ); ?>
                </select> <br />
                Set Image Url: <input class = "form-control" type = "text" name = "productImage" value = "<?=$product['productImage']?>"><br>
                <input type="submit" class= "btn btn-success" name="updateProduct" value="Update Product">
            </div>
        </form>
    </body>
</html>