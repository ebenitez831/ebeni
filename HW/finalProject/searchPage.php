<?php
    include "inc/header.php";
?>

<?php

 //include '../../dbConnection.php';
 //$conn = getDatabaseConnection("videoGames");
 
 //mysql_connect("localhost", "root", "");
// mysql_select_db("videoGames");
 
 mysql_connect("us-cdbr-iron-east-05.cleardb.net", "b5823dde7e753d", "c16dc3f0");
 mysql_select_db("heroku_5aacf6af28c5779");
 
 $output = '';
 
 if(isset($_GET['search'])){
     
    $searchq = $_GET['search'];
    
    $query = mysql_query("SELECT `gameRating`, `game_name`,`release_date`, platform_name FROM game NATURAL JOIN platform WHERE game_name Like '%$searchq%'") or die("could not search");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = '<div style = "color:red;"> Game not found! </div>';
    }
    
    else{
        
        echo "<table align = 'center' style='width:60%'>";
            echo "<tr style=' color: red; '>";
            echo "<th>Game Rating</th>";
            echo "<th>Game Name</th>"; 
            echo "<th>Release Date</th>";
            echo "<th>Platform</th>";
            echo "</tr>";
            
        while($row = mysql_fetch_array($query)){
            $gameRating = $row['gameRating'];
            $game_name = $row['game_name'];
            $release_date = $row['release_date'];
            $platform_name = $row['platform_name'];
   
            $output .= '<div> <th>' .$gameRating. '</th> <th>' .$game_name. '</th> <th>' .$release_date. '</th> <th>' .$platform_name. '</th> <tr> </div>';
        }
        
    }
 }

?>

<?php
            
        print("$output");
        echo "<table>";

?>