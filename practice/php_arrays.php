<?php 

$cards = array("ace", "king", "queen", "jack", "ten");
//print_r($cards); //for debbuging purposes

//echo $cards[1];

//$cards[] = "one"; //adds new element to array

//array_push($cards, "queen"); //another way to add to the array

//array_push($cards, "king", "queen"); //you can add mulitlpe elements to the array 

//print_r($cards);

//$cards[2] = "ten"; //replaces the first queen with 10

//print_r($cards);

echo "<hr>";

//$lastCard = array_pop($cards); //retrieves and removes the last item in array

displayCard($lastCard);
echo"<hr>";

print_r($cards);

// unset($cards[1]); //removes element from array
// echo "<hr>";
// print_r($cards);

$cards = array_values($cards); //re-indexes array
echo "<hr>";
print_r($cards);

shuffle($cards);
echo"<hr>";
print_r($cards);
echo"<hr>";

$randomIndex = array_rand($cards);
displayCard($cards[$randomIndex]);

echo"<hr>";

$randomIndex = rand(0,count($cards) - 1);
displayCard($cards[$randomIndex]);



function displaycard($card){
    
    // global $cards; //lets me use  variables that are outside the funcation 
    // echo "<img src = '../challenges/challenge2/img/cards/clubs/$cards[2].png'/>";
    
    echo "<img src = '../challenges/challenge2/img/cards/clubs/$card.png'/>";

}

function displayPoints($randomValue1, $randomValue2, $randomValue3){
    echo "<div id = 'output">;
    if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
        case 0: $totalPoints = 1000;
            break;
        case 1: $totalPoints = 500;
            break;
        case 3: $totalPoints = 250; 
            break;
    }
        echo "<h2>You won $totalPoints points!<h2>";
    else{
        echo "<h3>Try again! <h3>";
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Php Arrays </title>
    </head>
    <body>

    </body>
</html>