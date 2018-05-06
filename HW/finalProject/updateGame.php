<?php
    include '../../dbConnection.php';
    
    $connection = getDatabaseConnection("videoGames");
    
    function getPlatform($platform_id) {
    global $connection;
    
    //$sql = "SELECT platform_id, platform_name FROM game NATURAL JOIN platform ORDER BY platform_name";
    $sql = "SELECT `platform_id`, platform_name FROM platform ORDER BY platform_name";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["platform_id"] == $platform_id)? "selected": ""; 
        echo " value='".$record["platform_id"] ."'>". $record['platform_name'] ." </option>";
    }
}
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM game WHERE game_id = " . $_GET['game_id'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE game
                SET gameRating = :gameRating
                    game_name = :game_name,
                    release_date = :release_date,
                WHERE game_id = :game_id";
                
            //platform_name = :platform_name
            
        $np = array();
        $np[":gameRating"] = $_GET['gameRating'];
        $np[":game_name"] = $_GET['game_name'];
        $np[":release_date"] = $_GET['release_date'];
        $np[":game_id"] = $_GET['game_id'];
        
        //$np[":productImage"] = $_GET['productImage'];
        //$np[":platform_name"] = $_GET['platform_name'];
            
        $statement = $connection->prepare($sql);
        $statement->execute($np);
    }
    
    
    if(isset ($_GET['game_id']))
    {
        $game = getProductInfo();
    }
    
    //print_r($game);
    
    
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
                <input type="hidden" name="game_id" value= "<?=$game['game_id']?>"/>
                Rating: <input type="text" class = "form-control" value = "<?=$game['gameRating']?>" name="gameRating"><br>
                Game name: <input type="text" class = "form-control" value = "<?=$game['game_name']?>" name="game_name"><br>
                Release Date: <input type="text" class = "form-control" value = "<?=$game['release_date']?>" name="releasse_date"><br>
        
                <!--Platform: <select class = "form-control" name="platform_id">-->
                    <!--<option>Select One</option>-->
                    <!--<php getPlatform( $game['platform_id'] ); ?>-->
                <!--</select> <br />-->
                <!--Set Image Url: <input class = "form-control" type = "text" name = "productImage" value = "<php=$game['productImage']?>"><br>-->
                <input type="submit" class= "btn btn-success" name="updateProduct" value="Update Product">
            </div>
        </form>
    </body>
</html>