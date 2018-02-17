<?php

function getRandomColor(){
    
    $red = rand(0,255);
    $blue = rand(0, 255);
    $green = rand(0,250);
    $alpha = rand(0,100)/100;
    echo "rgba($red," .rand(0,250). ", $blue, $alpha)";
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
        <style>
        
            
            body{
                
                <?php
                    $red = rand(0,255);
                    $blue = rand(0, 255);
                    $green = rand(0,250);
                    $alpha = rand(0,100)/100;
                    
                    echo "background-color: rgba($red," .rand(0,250). ", $blue, $alpha)";
                    
                ?>
                
                
            }
            
            h1{
                
                color: <?= getRandomColor() ?>;
                
            }
            
            h2{
                
                color: <?php getRandomColor() ?>;
                
            }
            
            
        </style>
    
        </style>
    </head>
    <body>
        <h1>Welcome!</h1>
        
        <h2> Random Background Color!</h2>
    </body>
</html>