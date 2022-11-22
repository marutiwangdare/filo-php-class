<?php 

/* 
PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 
Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.

PHP Integers
2, 256, -256, 10358, -179567 are all integers.

An integer is a number without any decimal part.

An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and 
between -9223372036854775808 and 9223372036854775807 in 64 bit systems. 
A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

Note: Another important thing to know is that even if 4 * 2.5 is 10, 
the result is stored as float, because one of the operands is a float (2.5).

Here are some rules for integers:

An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), 
 hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes

PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()
*/

$str = "facebook";
var_dump($str);
echo "<br>";
$str = 25458;
var_dump($str);
echo "<br>";
$str = 25.2;
var_dump($str);
echo "<br>";

$result = 4 * 2.5;
echo $result."<br>";
var_dump($result);
echo "<br>The largest integer supported: ".PHP_INT_MAX;
echo "<br>The smallest integer supported: ".PHP_INT_MIN;
echo "<br>The size of an integer in bytes: ".PHP_INT_SIZE;

$a=10;
$v=90;


?>