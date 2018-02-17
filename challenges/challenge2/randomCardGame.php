<?php

function Getcard(){
$power1;
$i=0;

while($i<2)
{
    
    $power = rand(0,4);
    if($i == 0)
    {
        $power1 = $power;
    }
    
    $card = rand(0,3);
    switch($card)
    {
         case 0: $card = "clubs/";
                break;
                                
        case 1: $card = "diamonds/";
                break;
                                
        case 2: $card = "hearts/";
                break;
        case 3: $card= "spades/";
                break;
        
        
    }
   
   
    switch($power)
    {
        case 0: $card= $card."ten";
        break;
        case 1: $card=$card."jack";
        break;
        case 2: $card = $card."queen";
        break;
        case 3: $card = $card."king";
        break;
        case 4: $card = $card."ace";
        break;
    }
    
    echo "<img src = img/cards/" .$card.".png?>";
    
    
    $i++;
}

echo "<br/ >";
if ($power1>$power)
{
    echo "you win";
}
else if ($power1==$power)
{
    echo "equality";
    
}
else {
    echo "you lose";
}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Card Game </title>
    </head>
    <header>
        <h3>Refresh to try your Luck</h3>
    </header>
    <body>
        
        <?= Getcard() ?>
        <br/>
        <a href="randomCardGame.php"/>try again </a>
        
    </body>
</html>