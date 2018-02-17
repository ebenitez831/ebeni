<!DOCTYPE html>

<?php

    include 'inc/functions.php';

?>

<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
        <style>
            @import url("css/styles.css");
        </style>
        
    </head>
    <body>
        
        
        <div id = main>
            <?php
            
            play();
            
            ?>
            
            <form>
                <input type= "submit" value = "spin!"/>
            </form>
            
        </div>
        
    </body>
</html>