<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include '../../dbConnection.php';
$conn = getDatabaseConnection("ottermart");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM om_product";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Admin Main Page </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            @import url("styles.css");
        </style>
        
        
        <style>
            
            form {
                display: inline;
            }
            
        </style>
        
        <script>
            
            function confirmDelete(){
                return confirm("Are you sure you want to delete it");
            }
            
        </script>
        
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input type="submit" class= 'btn' name="addproduct" value="Add Product"/>
        </form>
        
        <form action = "logout.php">
            
            <input type = "submit" class="btn btn-warning" value = "Logout"/>
            
        </form>
        <br />
        
        <br />
        <strong> Products: </strong> <br />
        
        <?php $records=displayAllProducts();
            foreach($records as $record) {
                
                echo "<a class='btn btn-primary btn-sm' role='button' href='updateProduct.php?productId=".$record['productId']."' >Update</a> ";
                //echo "<a class='btn btn-info btn-sm' role='button' href='deleteProduct.php?productId=".$record['productId']."'>Delete</a>  ";
                
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                
                
                //<div class="btn-group">
                //<button type="button" class="btn btn-primary">Apple</button>
                //<button type="button" class="btn btn-primary">Samsung</button>
                //<button type="button" class="btn btn-primary">Sony</button>
                //</div>
                
                echo "<input type='hidden' name='productId' value= " . $record['productId'] . " />";
                
                //echo "<input type='submit' class='btn' name='submitForm' value='Remove'>";
                
                echo "<input type='submit' class = 'btn btn-danger btn-sm'  value='Remove'>  ";
                echo "</form>";
                
                echo $record['productName'];
                echo '<br>';
            }
        
        ?>
        
        

    </body>
</html>