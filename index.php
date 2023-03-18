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

    <h1>Anonymous Class</h1>

    <p>
        They are usually a class that needs to be used once in one place in a website
    </p>

    <?php

        // regular class
        $regClass = new SimpleClass;
        echo $regClass->helloWorld().' &nbsp <em>from regukar class</em>'; 
    
        // line break
        echo '<br>';

        // anonymous class
        $anonClass = new class() {
            public function hellowWorld() {
                return "<strong>Hello World!</strong>";
            }
        };

        echo $anonClass->hellowWorld().' &nbsp <em> from anonymous class</em>';
    ?>

</body>
</html>