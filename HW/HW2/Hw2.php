<!DOCTYPE html>

<?php
    include 'inc/function.php';
?>


<html>
    <head>
        <title>Hw 2: meme page</title>
        
    <body>
        
        <style>
            @import url("css/styles.css");    
        </style>
        
        <header>
            <h1>Memes!</h1>
            <h6>All images found on: <a href = "https://ifunny.co"> ifunny.co </a> </h6>
            
        </header>
        
       <div>
        
            <?php
                $type = rand(1,2);
                if($type == 1)
                    showMemePic();
                else {
                    showMemeGif();
                }
                
            ?>
        
       </div>
        
            <footer>
            
        <hr>
        CST336 Internet Programming. 2018 &copy; Benitez <br />
        <strong> Disclaimer:</strong>
        The information in this website is fictitous. It's used for academic purposes.
            
        <figure>
                
             <img 'id = csumbLogo' src = "../../img/csumbLogo.png" alt = "csumb logo">
                
        </figure>
    </footer>
        
    </body>

</html>