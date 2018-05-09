<?php
    "SELECT `gameRating`, `game_name`,`release_date`, platform_name 
    FROM game NATURAL JOIN platform"
?>
<?php
    include "inc/header.php";
?>

<?php
session_start();

include '../../dbConnection.php';
$conn = getDatabaseConnection("videoGames");

function displayAllGames(){
    global $conn;
    $sql= "SELECT `gameRating`, `game_name`,`release_date`, platform_name 
    FROM game NATURAL JOIN platform";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
}
?>

<div id = "showAllGames">
<?php
            $records=displayAllGames();
            echo "<table align = 'center' style='width:60%'>";
            echo "<tr style=' color: red; '>";
            echo "<th>Game Rating</th>";
            echo "<th>Game Name</th>"; 
            echo "<th>Release Date</th>";
            echo "<th>Platform</th>";
            echo "</tr>";
            foreach($records as $record) {
                
                echo "<tr style=' color: white; '>";
                
                echo "<th>";
                echo $record['gameRating'];
                echo "</th>";
                
                echo "<th>";
                echo $record['game_name'];
                echo "</th>";
                
                echo "<th>";
                echo $record['release_date'];
                echo "</th>";
                
                echo "<th>";
                echo $record['platform_name'];
                echo "</th>";
                
                echo "</tr>";
            }
            echo "</table>";
?>
</div><br/>

