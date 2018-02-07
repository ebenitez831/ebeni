<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset = "utf-8" />
    </head>
    <body>
        
        <?php
        
                function displaySymbol($randomValue){
                    
                    //$randomValue = rand(0,2);
                    echo $randomValue;
                    
                    // if(randomValue == 0){
                    //     $symbol = "seven";
                    // }
                    
                    // else if(randomValue == 1){
                    //     $symbol = "orange";
                    // }
                    
                    // else{
                    //     $symbol = "cherry";
                    // }
                    
                    switch($randomValue){
                        case 0: $symbol = "seven";
                                break;
                                
                        case 1: $symbol = "orange";
                                break;
                                
                        case 2: $symbol = "cherry";
                                break;
              

                    }
                    echo "<img src = 'img/$symbol.png' alt = '$symbol' title = '$symbol' width = '70' >";               
                }
                
                function displayPoints($randomValue1, $randomValue2, $randomValue3){
                    echo "div id= 'output'>"
;                    switch($randomValue1){
                        case 0: $totalPoints = 1000;
                                echo "<h1>Jackpot!</h1>";
                                break;
                                
                        case 1: $totalPoints = 500;
                                break;
                                
                        case 2: $totalPoints = 250;
                                break;
                
                    }
                    
                    echo "<h2> You won $totalPoints points </h2>";
                    
                    
                    
                }
                
                $randomValue1 = rand(0,2);
                displaySymbol($randomValue1);
                
                $randomValue2 = rand(0,2);
                displaySymbol($randomValue2);
                
                $randomValue3 = rand(0,2);
                displaySymbol($randomValue3);
                
                echo "<br /> <hr> values: $randomValue1 $randomValue2 $randomValue3";
            
                // for($i = 0; $i < 3; $i++){
                //     displaySymbol();
                // }
            
        
        ?>
<!--        
        <img src= "img/cherry.png" alt = "cherry" title = "cherry" width ="70"/>
        <img src= "img/lemon.png" alt = "lemon" title = "lemon" width ="70"/>
        <img src= "img/grapes.png" alt = "grapes" title = "grapes" width ="70"/>
        <img src= "img/orange.png" alt = "orange" title = "orange" width ="70"/>
        <img src= "img/cherry.png" alt = "cherry" title = "cherry" width ="70"/>
        <img src= "img/cherry.png" alt = "cherry" title = "cherry" width ="70"/>
        <img src= "img/cherry.png" alt = "cherry" title = "cherry" width ="70"/>
        <img src= "img/cherry.png" alt = "cherry" title = "cherry" width ="70"/>
        <img src= "../../img/csumbLogo.png" alt = "csumbLogo" title = "csumbLogo" width ="70"/>
-->        
    </body>
</html>