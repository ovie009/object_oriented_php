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

    <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In incidunt inventore commodi a tenetur consequuntur aspernatur repellat molestias temporibus velit?
    </p>
    <strong> <?php

        $person = new Person("Okomite-Iffie Ovie", "Black", 24);

        try {
            $person->setName("Iffie Ovie");
            echo $person->getName();
        } catch (\Throwable $th) {
            //throw $th;
            // if the code in the try block doesn't work, catch the error
            // echo the error message
            echo  '[ERROR!]: '.$th->getMessage(); 
        }

    ?> </strong>


</body>
</html>