<?php
    include '../../dbConnection.php';
    
    $connection = getDatabaseConnection("videoGames");
    
    $sql = "DELETE FROM game
            WHERE game_id =  " .$_GET['game_id'];
    $statement = $connection->prepare($sql);
    //$statement->execute();
    
    header("Location: adminPage.php");
?>