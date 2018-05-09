<?php
    include '../../dbConnection.php';
    
    $connection = getDatabaseConnection("videoGames");
    
    function getPlatform($platform_id) {
    global $connection;
    
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
    
    function getGameInfo()
    {
        global $connection;
        $sql = "SELECT * FROM game WHERE game_id = " . $_GET['game_id'];
    
        //echo $_GET["game_id"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateGame'])) {
        
        //echo "Trying to update the Game!";
        
        $sql = "UPDATE game
                SET gameRating = :gameRating,
                    game_name = :game_name,
                    release_date = :release_date,
                    platform_id = :platform_id
                WHERE game_id = :game_id";
                
            //platform_name = :platform_name
            
        $np = array();
        $np[":gameRating"] = $_GET['gameRating'];
        $np[":game_name"] = $_GET['game_name'];
        $np[":platform_id"] = $_GET['platform_id'];
        $np[":release_date"] = $_GET['release_date'];
        $np[":game_id"] = $_GET['game_id'];
            
        $statement = $connection->prepare($sql);
        $statement->execute($np);
    
    }
    
    
    if(isset ($_GET['game_id']))
    {
        $game = getGameInfo();
    }
    
    //print_r($game);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Game Info </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            @import url("styles.css");
        </style>
        
        <style>
            body{
                background-image: url("image/background2.jpg");
                color: white;
            }
        </style>
        
    </head>
    
        
    <body>
        
        <br>
        <a href="adminPage.php" class="btn btn-info">Admin Home</a>
        
        <h1 style = "text-align:center;">Update Game Info</h1>
        
        <form>
            <div class="col-xs-2 col-xs-offset-5">
                <input type="hidden" name="game_id" value= "<?=$game['game_id']?>"/>
                Rating: <input type="text" class = "form-control" value = "<?=$game['gameRating']?>" name="gameRating"><br>
                Game name: <input type="text" class = "form-control" value = "<?=$game['game_name']?>" name="game_name"><br>
                Release Date: <input type="text" class = "form-control" value = "<?=$game['release_date']?>" name="release_date"><br>
                Platform <select class = "form-control" name="platform_id">
                    <option value="">Select One</option>
                    <?php getPlatform($game['platform_id']); ?>
                </select> <br />
                <input type="submit" class= "btn btn-success" name="updateGame" value="Update Game">
            </div>
        </form>
    </body>
</html>