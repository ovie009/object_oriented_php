<?php
    // strict_types can take two possible values, 1 or 0
    // where 1 == true and 0 == false
    declare(strict_types = 1); 
    // if strict_types is set as 1, php would be very strick with the type of the variables
    include "./autoloader.inc.php";


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $calc = new Calc($operator, (float)$num1, (float)$num2);
    
    echo 'Solution: ';
    $solution = $calc->calculate();
    echo $solution;
?>