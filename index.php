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

        echo 'The drinking age in Nigeria is ';
        echo Person::getDrinkingAge();
        
        echo '<br>';
        
        echo 'The drinking age in the United States is ';
        Person::setDrinkingAge(21);
        echo Person::getDrinkingAge();

    ?> </strong>


</body>
</html>