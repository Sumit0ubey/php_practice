<?php 
// write a code to find whether the number is greater than other number or not

$userInput1 = readline("Enter a number: ");
$userInput2 = readline("Enter a Number: ");
intval($userInput1);
intval($userInput2);

if ($userInput1 == $userInput2) {
    echo "Both the Number is Same (", $userInput1, " = ", $userInput2, " ) \n";
}
else if ($userInput1 > $userInput2) { 
    echo $userInput1, " is greater than ", $userInput2, "\n";
}
else {
    echo $userInput2, " is Greater than ", $userInput1, "\n";
}

?>>
