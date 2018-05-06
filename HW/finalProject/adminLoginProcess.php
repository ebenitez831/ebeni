<?php

    session_start();
    
    include '../../dbConnection.php';
    
    $conn = getDatabaseConnection("videoGames");
    
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    //echo $password;
    
    
    //following sql does not prevent SQL injection
    $sql = "SELECT * 
            FROM admin
            WHERE username = '$username'
            AND   password = '$password'";
            
    //following sql prevents sql injection by avoiding using single quotes        
    $sql = "SELECT * 
            FROM admin
            WHERE username = :username
            AND   password = :password";    
            
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
    
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //expecting one single record
    
    //print_r($record);

    if (empty($record)) {
        
        //echo "Wrong Username or password";
        
        $_SESSION['errMsg'] = "Invalid username or password!";
        header("Location:index.php");
        
    }
    else {
        
            $_SESSION['adminName'] = $record['username'];
            header("Location:adminPage.php");
        
    }

?>