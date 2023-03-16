<?php
    include "./includes/person.inc.php";
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
    
        $person1 = new Person;
        $person1->setName("Ovie");
        echo $person1->name;

        echo '<br>';
        
        $person2 = new Person;
        $person2->setName("prosper");
        echo $person2->name;

    ?> </strong>


</body>
</html>