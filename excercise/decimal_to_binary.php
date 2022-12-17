<?php

$num = 13;
$binary = "";
while($num > 0){

 	$binary.= $num % 2;
	$num = (int)($num / 2);

}

echo strrev($binary);

/* 
$num 13 6 3 1 0

6 3 1 0
*/

?>