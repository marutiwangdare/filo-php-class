<?php 
/* 
PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()
However, the PHP var_dump() function returns the data type and value:
*/

// Check if a numeric value is finite or infinite 

echo "The largest representable floating point number=".PHP_FLOAT_MAX;
echo "<br>";
$x = 1.9e411;
echo $x;

echo "<br>";
var_dump($x);

echo "<br>";
$result = is_finite($x);
var_dump($result);

echo "<br>";
$x = 1.94;
echo $x;

echo "<br>";
var_dump($x);

echo "<br>";
$result = is_finite($x);
var_dump($result);

echo "<br> is_infinite()<br>";
$result = is_infinite($x);
var_dump($result);

?>