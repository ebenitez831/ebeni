<?php

   include '../../../dbConnection.php';

      $conn = getDatabaseConnection('videoGames');
      
      $sql = "SELECT `gameRating`, `game_name`,`release_date`, platform_name 
              FROM game 
              NATURAL JOIN platform
              WHERE platform_name = :platform_name";
      
      $stmt = $conn->prepare($sql);  
      $stmt->execute(array(":platform_name"=>$_GET['platform_name']));
      $record = $stmt->fetch(PDO::FETCH_ASSOC);
      print_r($record);  
    
    
     echo json_encode($record);
?>