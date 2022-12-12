<?php 
/* 
PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". 
It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	Same as...	Description	Show it
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus

*/

$z = 10+10*20;

echo "<br> 20 += 100 <br>";
$x = 20;  
$x += 100;

echo $x;


$x = 50;
$x -= 30;

echo "<br> 50 -= 30<br>";

echo $x;

$x = 5;
$x *= 6;

echo "<br> 5 *= 6<br>";
echo $x;


$x = 10;
$x /= 5;

echo "<br> 10 /=  5<br>";
echo $x;

$x = 10;
$x %= 5;

echo "<br> 10 %=  5<br>";
echo $x;
?>