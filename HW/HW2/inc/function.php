<?php
    function displayPic($randomPic){
        
        switch($randomPic){
            case 0: $meme = "alcoholic";
                break;
                                
            case 1: $meme = "fallout4";
                break;
                                
            case 2: $meme = "lego";
                break;
                
            case 3: $meme = "loganPaul";
                break;
                
            case 4: $meme = "suiteLife";
                break;
            
            case 5: $meme = "superBowl52";
                break;
        }
        echo "<img id = 'memePics'src = 'img/$meme.jpg' alt = '$symbol' title = '$meme'>";
    }

    function displayGif($randomPic){
        
        switch($randomPic){
            case 0: $meme = "gentleman";
                break;
                                
            case 1: $meme = "incredibles";
                break;
                                
            case 2: $meme = "planeDays";
                break;
                
            case 3: $meme = "simpsons";
                break;
                
            case 4: $meme = "superman";
                break;
            
            case 5: $meme = "theOffice";
                break;
        }
        echo "<img id = 'memePics'src = 'img/$meme.gif' alt = '$symbol' title = '$meme'>";
    }
    
    
        function showMemePic(){
                ${"randomValue" . $i} = rand(0,5);
                displayPic(${"randomValue" . $i});
        }
        
        function showMemeGif(){
                ${"randomValue" . $i} = rand(0,5);
                displayGif(${"randomValue" . $i});
        }
?>