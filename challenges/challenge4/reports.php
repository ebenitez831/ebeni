<?php
    // $sql1 = "SELECT COUNT(user_id) FROM om_purchase 
    //         WHERE om_purchaseDate >= '2018-02-01' 
    //         AND om_purchaseDate <= '2018-02-28'";
    
    // $sql2 = "SELECT om_productName, email from om_product pr 
    //         INNER JOIN om_purchase p on pr.productId = p.productId 
    //         INNER JOIN om_user u on p.user_id = u.userId 
    //         WHERE email LIKE '%aol.com'";
    
    // $sql3 = "SELECT COUNT(user_id), sex from om_user u 
    //         INNER JOIN om_purchase p 
    //         ON p.user_id = u.userId
    //         GROUP BY sex";
            
    // $sql4 = "SELECT DISTINCT (catName) FROM om_purchase p
    //         INNER JOIN om_product pr 
    //         on p.productId = pr.productId
    //         INNER JOIN om_category c 
    //         ON pr.catId = c.catId
    //         where p.purchaseDate >= '2018-02-01' AND p.purchaseDate <= '2018-02-28'
    //         ORDER BY catName";
    
 $sql1 = "SELECT COUNT(1) totalPurchases
            FROM om_purchase p
            INNER JOIN om_user u
            on p.user_id = u.userId
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
            
 $sql2 = "SELECT productName
            FROM om_user u
            INNER JOIN om_purchase p
            on u.userId = p.user_id
            NATURAL JOIN om_product
            WHERE email LIKE \"%@aol.com\" ";
            
 $sql3 = "SELECT SUM(quantity), sex
            FROM user u
            INNER JOIN purchase p
            on u.userId = p.user_id
            GROUP BY sex";

 $sql4 = "SELECT DISTINCT(catName)
            FROM purchase p
            INNER JOIN user u
            on p.user_id = u.userId
            NATURAL JOIN product 
            NATURAL JOIN category cat
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
    

$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password =  "";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbConn-> prepare($sql1);
$stmt -> execute();
$records = $stmt -> fetch(); // you are expecting ONLY ONE record

//print_r($records);

echo "Total purchases in February: " .$records['totalPurchases'];

$stmt = $dbConn-> prepare($sql2);
$stmt -> execute();
$records = $stmt -> fetchAll(PDO::FETCH_ASSOC); //You are expecting MANY records

//print_r($records);

echo "<br/> <br/> Products bought by users with an aol account: <br />";

foreach($records as $record){
    echo $record['productName'] . "<br />";
}


// mysqli - obsolete
// mysqli
// pdo php data objects
    
?>

