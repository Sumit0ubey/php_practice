<?php
// a] program a code to check whether the number is prime or not
function isPrime($Number){
    if ($Number <= 1){
        return false;
    }
    elseif ($Number <= 3){
        return true;
    }
    elseif ($Number % 2 == 0 or $Number % 3== 0){
        return false;
    }
    for ($i = 5; $i*$i <= $Number; $i += 6){
        if ($Number % $i == 0 or $Number % ($i + 2) == 0){ 
            return false;
        }
    }
    return true;
}

?>>
