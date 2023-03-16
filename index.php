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

    <?php
        $pet01 = new Pet();

        // if the method owner is private it will return an error, because the visibility is set as private
        echo $pet01->owner();

        // when a methos or property is set as private, it can only be used within the same class

        echo '<br>';
        $user = new Person();
        echo $user->fullname();
        // despite the property which stores the firstname and lastname are private 
        // the method fullname is public and it has access to the private property within the class which it then made public
        echo ' is '.$pet01->age().'years old'; 


    ?>


</body>
</html>