<?php
    // Operator at number
    $a = 5;
    $b = 6;
    echo $a + $b . "<br>"; // -, *, /, **, ++, --

    // Operator at boolean
    $x = true;
    $y = true;
    $z = false;
    echo $x + $y + $z . "<br>"; // Implicitly convert the boolean value into number. true = 1, false = 0. This is 
                       // called type juggling in PHP (automatic conversion).This conversion happens only 
                       // in numeric operations like +, -, *, ++, --, ** etc.

    // String operator
    // ., .=
    $p = "Hello ";
    $q = "Subrata!";
    echo $p . $q . "<br>";

    // Comparison operator 
    // ==, ===, !=, !==, >, >=, <, <=
    $num = 5;
    echo (($num % 2) == 0) . "<br>"; // If the result is false then it print nothing. Actually it is blank.

    // Logical Operator 
    // && or and, || or or, !
    echo (($num > 0) && ($num % 2 != 0)) . "<br>";

    // Ternary operator
    echo (($num % 2 == 0)? "$num is even" : "$num is odd") . "<br>";
    // In " " varibale works but in ' ' variable does not work.


?>