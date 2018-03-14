<?php

    if(isset($_POST['ford-answer'])){
        $select = $_POST['ford-answer'];
    }
    
    if(isset($_POST['astonMartin-Answer'])){
        $select = $_POST['astonMartin-Answer'];
    }
    
    if(isset($_POST['nissan-answer'])){
        $select = $_POST['nissan-answer'];
    }

    //this doesnt seem to be working

?>

 <?php

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//       if (empty($_POST["FirstName"])) {
//         $firstNameErr = "First name is required";
//       } 
      
//       else {
//         echo results.php;
//       }
    
    
//       if (empty($_POST["LastName"])) {
//         $lastNameErr = "Last name is required";
//       } 
      
//       else {
//         echo results.php;
//       }
    
//     }

// ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Car Quiz </title>
        <link href="https://fonts.googleapis.com/css?family=Emblema+One" rel="stylesheet">
    </head>
    
    <style>
        @import url("css/styles.css"); 
    </style>
    
    
    <body>
    
    <header>
        <h1>Car Quiz</h1>
    </header>
    
    <!--<form action = "php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>", "results.php" name = "Quiz" method = "post">-->
    <form action = "results.php" name = "Quiz" method = "post">
        <div id = "name">
            
            First name: <input type="text" name="FirstName" value="">
            <!--<span class="error">* <?php echo $firstNameErr;?></span>-->
            <br>
            Last name: <input type="text" name="LastName" value="">
            <!--<span class="error">* <?php echo $lastNameErr;?></span>-->
            <br>
            
            
        </div>
        
        <div>
            <textarea id = "instructions" rows="1" cols="68" readonly disabled>
            choose the correct company that makes each car.
            </textarea>
        </div>
        
        <div id = "Ford?">
        <img src="cars/ford.jpg" alt = "FordMustang"></img>
        <br />
        <!--<select id="Ford">-->
            
            <!--<option value="default">Select One</option>-->
            <!--<option value="Toyota">Toyota</option>-->
            <!--<option value="Nissan">Nissan</option>-->
            <!--<option value="correctAns">Ford</option>-->
            <!--<option value="Chevrolet">Chevrolet</option>-->
            
            <div>
            
            <div>
                
            <input type="radio" name="ford-answers" id="ford-answers-A" value="A" <?= ($_GET['ford-answer']=="A")?"checked":"" ?>/>

            <label for="ford-answers-A">A) Toyota </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="ford-answers" id="ford-answers-B" value="B"<?= ($_GET['ford-answer']=="B")?"checked":"" ?>/>

            <label for="ford-answers-B">B) Nissan </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="ford-answers" id="ford-answers-C" value="C" <?= ($_GET['ford-answer']=="C")?"checked":"" ?>/>

            <label for="ford-answers-C">C) Ford </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="ford-answers" id="ford-answers-D" value="D" <?= ($_GET['ford-answer']=="D")?"checked":"" ?>/>

            <label for="ford-answers-D">D) Chevrolet </label>
            
            </div>
              
                  
              
        </select><br /><br />
        
        </div>
        
        <!--<div id = "AstonMartin?">-->-->
        <img src="cars/AstonMartin.jpg" alt = "AstonMartin"></img>
        <br />
        <!--<select id="AstonMartin">-->
            
        <!--    <option value="default">Select One</option>-->
        <!--    <option value="BMW">BMW</option>-->
        <!--    <option value="Porsche">Porsche</option>-->
        <!--    <option value="Subaru">Subaru</option>-->
        <!--    <option value="correctAns">Aston Martin</option>-->
        
        
            <input type="radio" name="AstonMartin-answers" id="AstonMartin-answers-A" value="A" <?= ($_GET['astonMartin-answer']=="A")?"checked":"" ?>/>

            <label for="AstonMartin-answers-A">A) BMW </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="AstonMartin-answers" id="AstonMartin-answers-B" value="B" <?= ($_GET['astonMartin-answer']=="B")?"checked":"" ?>/>

            <label for="AstonMartin-answers-B">B) Porsche </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="AstonMartin-answers" id="AstonMartin-answers-C" value="C" <?= ($_GET['astonMartin-answer']=="C")?"checked":"" ?>/>

            <label for="AstonMartin-answers-C">C) Subaru </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="AstonMartin-answers" id="AstonMartin-answers-D" value="D" <?= ($_GET['astonMartin-answer']=="D")?"checked":"" ?>/>

            <label for="AstonMartin-answers-D">D) AstonMartin </label>
            
            </div>
              
        </select><br /><br />
        
        </div>
        
        <div id ="Nissan?">
        <img src="cars/nissan.jpg" alt = "Nissan"></img>
        <br />
        <!--<select id="Nissan">-->
            
        <!--    <option value="default">Select One</option>-->
        <!--    <option value="correctAns">Nissan</option>-->
        <!--    <option value="Toyota">Toyota</option>-->
        <!--    <option value="Mazda">Mazda</option>-->
        <!--    <option value="Lexus">Lexus</option>-->
              
            <input type="radio" name="nissan-answers" id="nissan-answers-A" value="A" <?= ($_GET['nissan-answer']=="A")?"checked":"" ?>/>

            <label for="nissan-answers-A">A) Nissan </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="nissan-answers" id="nissan-answers-B" value="B" <?= ($_GET['nissan-answer']=="B")?"checked":"" ?>/>

            <label for="nissan-answers-B">B) Toyota </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="nissan-answers" id="nissan-answers-C" value="C" <?= ($_GET['nissan-answer']=="C")?"checked":"" ?>/>

            <label for="nissan-answers-C">C) Mazda </label>
            
            </div>
            
            <div>
                
            <input type="radio" name="nissan-answers" id="nissan-answers-D" value="D" <?= ($_GET['nissan-answer']=="D")?"checked":"" ?>/>

            <label for="nissan-answers-D">D) Lexus </label>
            
            </div>
        </select><br /><br />
        
        </div>
        
        <div id = button>
        <input id = "submitButton" type="submit" value="Submit Quiz"/>
        </div>
    </form>
    </body>
</html>