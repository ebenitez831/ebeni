<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style> 
            @import url("css/styles.css"); 
        </style>
    </head>
    
        

    <body id = "login" style = "text-align:center;">
        
            <h1> Video Game - Admin Login </h1>
            
            <form method="POST" action="adminLoginProcess.php">
                
               <div class="col-xs-2">
                   
                    <label for="username">Username:</label>    
                    <input type="text" class="form-control" id="username" name = "username">
                    
            
                    <label for="password">Password:</label>
                    <input type= "password" class = "form-control" id ="password" name = "password">
                    </br>
                    
                    <input type="submit" class="btn" name="submitForm" value="Login!">
                    
                    <div id="error">
                        <br>
                        <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
                    </div>
                        <?php unset($_SESSION['errMsg']); ?>
                    
                </div>    
            </form>
        
    </body>
    
</html>