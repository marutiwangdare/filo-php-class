<?php 
/* 
PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.
*/

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;


echo "<br>";

// Cast int to float
$x = 23465;
var_dump($x);

$float_cast = (float)$x;
echo "<br>";
var_dump($float_cast);
echo "<br>";
echo $float_cast;

echo "<br> 123a45 convert this to int <br>";

// Cast string to int
$x = "123a45";
$int_cast = (int)$x;
echo $int_cast;

echo "<br> b123a45 convert this to int <br>";

// Cast string to int
$x = "b123a45";
var_dump($x);
$int_cast = (int)$x;
var_dump($int_cast);
echo $int_cast;

echo "<br> 9b123a45 convert this to int <br>";

// Cast string to int
$x = "9b123a45";
var_dump($x);
$int_cast = (int)$x;
var_dump($int_cast);
echo $int_cast;
?>