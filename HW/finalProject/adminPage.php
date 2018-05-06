<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include '../../dbConnection.php';
$conn = getDatabaseConnection("videoGames");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM game";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Admin Main Page </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            @import url("styles.css");
        </style>
        
        
        <style>
            
            form {
                display: inline;
            }
            
        </style>
        
        <script>
            
            function confirmDelete(){
                return confirm("Are you sure you want to delete it");
            }
            
        </script>
        
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input type="submit" class= 'btn' name="addGame" value="Add Game"/>
        </form>
        
        <form action = "adminLogout.php">
            
            <input type = "submit" class="btn btn-warning" value = "Logout"/>
            
        </form>
        <br />
        
        <br />
        <strong> Products: </strong> <br />
        
        <?php $records=displayAllProducts();
            foreach($records as $record) {
                
                echo "<a class='btn btn-primary btn-sm' role='button' href='updateGame.php?game_id=".$record['game_id']."' >Update</a> ";
                
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                
                echo "<input type='hidden' name='game_id' value= " . $record['game_id'] . " />";
                
                
                echo "<input type='submit' class = 'btn btn-danger btn-sm'  value='Remove'>  ";
                echo "</form>";
                
                echo $record['game_name'];
                echo '<br>';
            }
        
        ?>
        
        

    </body>
</html>