<?php 
/* 
<=>	Spaceship	$x <=> $y	
Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. 
Introduced in PHP 7.
*/

$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y

//echo ($y <=> $x)
?>