<?php 
/* 
PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value:
*/

$x = acos(1.1);
var_dump($x);
echo "<br>";
var_dump(is_nan($x));

echo "<br>-------------<br>";

$x = acos(8);
var_dump($x);
echo "<br>";
var_dump(is_nan($x));

echo "<br>-------------<br>";

$x = acos(0.1);
var_dump($x);
echo "<br>";
var_dump(is_nan($x));
?>