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
        $circle = new Circle;
        $radius = 5.67;
        echo 'The area of a circle with radius '.$radius.' is ';
        echo '<strong>';
        echo $circle->area($radius);
        echo '</strong>';

        echo '<br>';
        
        $rectangle = new Rectangle;
        $length = 6;
        $width = 4;
        echo 'The area of a rectangle with length '.$length.' and width '.$width.' is ';
        echo '<strong>';
        echo $rectangle->area(null, $length, $width);
        echo '</strong>';
        
        echo '<br>';

        $cuboid = new Cubiod;
        $length = 3;
        $width = 4;
        $height = 5;
        echo 'The volume of a cuboid with length '.$length.',  height '.$height.' and width '.$width.' is ';
        echo '<strong>';
        echo $cuboid->volume(null, $length, $width, $height);
        echo '</strong>';

        echo '<br>';

        $cylinder = new Cylinder;
        $radius = 3;
        $height = 5;
        echo 'The volume of a cylinder with radius '.$radius.',  height '.$height.' is ';
        echo '<strong>';
        echo $cylinder->volume($radius, null, null, $height);
        echo '</strong>';
    ?>

</body>
</html>