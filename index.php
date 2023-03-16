<?php
    include "./includes/person.inc.php";
    include "./includes/newclass.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In incidunt inventore commodi a tenetur consequuntur aspernatur repellat molestias temporibus velit?
    </p>
    <strong> <?php

        $newClass = new NewClass;
        unset($newClass); // delete instantiated object
        echo $newClass->getData(); // now this line of code would return an error message
        // because the class has been removed

    ?> </strong>


</body>
</html>