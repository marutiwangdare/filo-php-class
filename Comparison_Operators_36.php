<?php 
/* 
PHP Comparison Operators
The PHP comparison operators are used to compare two values (number or string):

Operator	Name	Example	Result	Show it
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, 
    depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
*/

$x = 100;  
$y = "100";

echo "<br>$x == $y ";
var_dump($x == $y); // returns true because values are equal

$x = 100;  
$y = "100";

echo "<br>$x === $y ";
var_dump($x === $y); // returns false because types are not equal

$x = 100;  
$y = "100";

echo "<br>$x != $y ";
var_dump($x != $y); // returns false because values are equal

$x = 100;  
$y = "100";

echo "<br>$x <> $y ";
var_dump($x <> $y); // returns false because values are equal

$x = 100;  
$y = "100";

echo "<br>$x !== $y ";
var_dump($x !== $y); // returns true because types are not equal

$x = 100;
$y = 50;

echo "<br>$x > $y ";
var_dump($x > $y); // returns true because $x is greater than $y

$x = 10;
$y = 50;

echo "<br>$x < $y ";
var_dump($x < $y); // returns true because $x is less than $y

$x = 50;
$y = 50;

echo "<br>$x >= $y ";
var_dump($x >= $y); // returns true because $x is greater than or equal to $y

$x = 500;
$y = 50;

echo "<br>$x >= $y ";
var_dump($x >= $y); // returns true because $x is greater than or equal to $y

$x = 50;
$y = 50;

echo "<br>$x <= $y ";
var_dump($x <= $y); // returns true because $x is less than or equal to $y

$x = 5;
$y = 50;

echo "<br>$x <= $y ";
var_dump($x <= $y); // returns true because $x is less than or equal to $y

?>