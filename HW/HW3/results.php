<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <style>
        @import url("css/styles.css"); 
    </style>
    
    <body id = "results">
        
        <form action = "index.php" name = "Quiz" method = "post">
            <p><?php echo $_POST["FirstName"]?>'s Results </p>
            
            <?php
                $fordAns = $_POST['ford-answers'];
                $astomMartinAns = $_POST['AstonMartin-answers'];
                $nissanAns = $_POST['nissan-answers'];
                
                // $fordCorrect = 0;
                // $astonCorrect = 0;
                // $nissanCorrect = 0;
                
                $total = 0;
                
                if($fordAns == "C"){
                     $total++;
                }
                
                if($astomMartinAns == "D"){
                    $total++;
                }
                
                if($nissanAns == "A"){
                    $total++;
                }
                
                print("You got ");
                echo $total;
                print(" out of 3 correct!");
                
            ?>
            <input id = "returnButton" type="submit" value="Try again."/>
        </form>
    </body>
</html>