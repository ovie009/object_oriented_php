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

    <h1>Abstract Class</h1>

    <p>
        Abstract class is a class that can only be used within other classes amnd cannot be instantiated
    </p>

    <?php

        $product = new BuyProduct;
        echo '<strong>';
        echo $product->getPayment();
        echo '</strong>';
    ?>

</body>
</html>