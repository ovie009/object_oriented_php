<?php
    // strict_types can take two possible values, 1 or 0
    // where 1 == true and 0 == false
    declare(strict_types = 1); 
    // if strict_types is set as 1, php would be very strick with the type of the variables
    include "./includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Php</title>
</head>
<body>

    <h1>Interface</h1>

    <p>
        An interface is a way of defining what methods a class must implement, 
        without specifying how they are implemented1. 
        Interfaces are useful when you want to have multiple classes that share some common functionality, 
        but may have different implementations
    </p>

    <?php 
        function runQuery(DatabaseInterface $db) {
            // code that uses the methods of DatabaseInterface
        }
        
        $mysql = new MySQLDatabase();
        runQuery($mysql); // works
        
        $postgres = new PostgreSQLDatabase();
        runQuery($postgres); // also works
    ?>

</body>
</html>