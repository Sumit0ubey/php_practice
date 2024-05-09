<?php

// write a code to print binaryPyramid

function binaryPyramid($row){
    for ($i = 1; $i <= $row; $i++) {
        $num = $i % 2 == 0 ? 1 : 0 ;
        for ($j = 1; $j <= $i; $j++) {
            echo $num, "";
            $num = $num == 0 ? 1 : 0 ;
        }
        echo "\n";
    }
}

$userInput3 = readline("Enter the Number of rows You want in binary pyramid: ");
echo binaryPyramid(intval($userInput3));
?>>
