<!DOCTYPE html>

<?php
    session_start(); // starts or resumes a session
    
    $_SESSION[ 'course'] = "CST336 Internet Programming";
?>


<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?= $_SESSION['course'] ?>
        
        
    </body>
</html>