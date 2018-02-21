<?php

    function randAlphabetLetter()
    {
        $int = rand(0,51);
        $a_z = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $rand_letter = $a_z[$int];
        return $rand_letter;
    }
    
    function randNumeralLetter()
    {
        $int = rand(0,9);
        $a_z = "0123456789";
        $rand_letter = $a_z[$int];
        return $rand_letter;
    }

    $passwords = array();
    
    for ($i = 0; $i < 25; $i++)
    {
        $currentPassword = '';
        $number_count = 0;
        $word_length = rand(5,10);
        for ($i2 = 0; $i2 < $word_length; $i2++)
        {
            $type = rand(1,2);
            if (($number_count < 3) && ($type == 1))
            {
                $letter = randNumeralLetter();
                $number_count++;
            }
            else
            {
                $letter = randAlphabetLetter();
            }
            
            $currentPassword = $currentPassword . $letter;
        }
        
        $passwords[$i] = $currentPassword;
        
        
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
            
        <?php
        
            echo "<table>";
            for($i = 0; $i < 25; $i++)
            {
                echo "<tr><td>" . $passwords[$i] . "</td></tr>";
            }
            echo "</table>";
        ?>
        
    </body>
</html>