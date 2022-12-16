<?php 
/* 
A prime number is a positive integer that is divisible only by 1 and itself. For example: 2, 3, 5, 7, 11, 13, 17.
*/

$num = 1;
$prime = true;

if ($num == 0 || $num == 1)
    $prime = false;
    
for($i=2; $i<$num; $i++)
{
	if($num % $i==0){
        $prime=false;
        break;
    }
    	
}

if($prime)
	echo $num." is prime";
else
	echo $num." is not prime";
?>