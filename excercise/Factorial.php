<?php

/* 
The factorial of a positive number n is given by:

factorial of n (n!) = 1 * 2 * 3 * 4....n
The factorial of a negative number doesn't exist. And, the factorial of 0 is 1.
*/
function factorial($num){
    $result = 1;

    if($num < 0)
        return "Error! Factorial of a negative number doesn't exist.";

    for($i=1; $i<=$num; $i++){

        $result*=$i;
    }
    
	return $result;
}

echo factorial(10);

?>