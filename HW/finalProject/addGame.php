<?php
session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include "../../dbConnection.php";
$conn = getDatabaseConnection("videoGames");

function getPlatform() {
    global $conn;
    
    $sql = "SELECT platform_id, platform_name from platform ORDER BY platform_name";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["platform_id"] ."'>". $record['platform_name'] ." </option>";
    }
}

if (isset($_GET['submitGame'])) {
    
    $game_name = $_GET['game_name'];
    $platform_id = $_GET['platform_id'];
    $release_date = $_GET['release_date'];
    $gameRating = $_GET['gameRating'];
    $game_id = $_GET['game_id'];
    
    $sql = "INSERT INTO game
            ( `game_name`, `platform_id`, `release_date`, `gameRating`) 
             VALUES ( :game_name, :platform_id, :release_date, :gameRating)";
    
    $namedParameters = array();
    $namedParameters[':game_name'] = $game_name;
    $namedParameters[':release_date'] = $release_date;
    $namedParameters[':gameRating'] = $gameRating;
    $namedParameters[':platform_id'] = $platform_id;
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
        
            body{
                margin: auto;
                background-image: url("image/background2.jpg");
                color: white;
            }
        
            
        </style>
        
        <title> Add Game </title>
    </head>
    <body>
        <br>
        <a href="adminPage.php" class="btn btn-info" style = "text-align:left;">Admin Home</a>
        <h1 style = "text-align: center;"> Add Game</h1>
            
        </form>
        
        <form style = "text-align:center;">
            
            <div class="col-xs-2 col-xs-offset-5">
            Game name <input class = "form-control" type="text" name="game_name"><br>
            Release Date <input class = "form-control" type = "text" name="release_date"><br>
            Game Rating <input class = "form-control" type="text" name="gameRating"><br>
            platform <select class = "form-control" name="platform_id">
                <option value="">Select One</option>
                <?php getPlatform(); ?>
            </select> <br />
            <input class = "btn btn-success" type="submit" name="submitGame" value="Add Game">
            
            </div>
            
        </form>
    </body>
</html>