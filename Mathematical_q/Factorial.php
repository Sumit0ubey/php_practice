<?php

// b] write a program to print factorial
 echo "Enter a number to find a factorial \n";
$UserInput2 = readline(("Enter number: "));
intval($UserInput2);
function factorial($Number){
    if ($Number == 0 or $Number == 1){
        return 1;
        }
    elseif ($Number >= 2){ 
        return $Number * factorial($Number -1);
    }
}
echo "The factorial of ", $UserInput2, " is ", strval(factorial($UserInput2));
?>>
