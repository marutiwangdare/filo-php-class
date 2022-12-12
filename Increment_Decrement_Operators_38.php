<?php 
/*
PHP Increment / Decrement Operators
The PHP increment operators are used to increment a variable's value.

The PHP decrement operators are used to decrement a variable's value.

Operator	Name	Description	Show it
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	

--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one
*/

$x = 10;  

echo "<br>++$x : ";
echo ++$x;
//echo $x;

$x = 10;  
echo "<br>$x++ : ";
echo $x++;
//echo $x;

echo "<br>after increment x++ :  $x<br>";

$x = 10;  
echo "<br>--$x : ";
echo --$x;
//echo $x;

$x = 10;  
echo "<br>$x-- : ";
echo $x--;
//echo $x;

echo "<br>after decrement x-- :  $x<br>";
?>