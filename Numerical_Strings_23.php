<?php 
/* 
PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. 
The function returns true if the variable is a number or a numeric string, false otherwise.
*/

$x = 5985;
var_dump(is_numeric($x));

echo "<br>";
$x = "5985";
var_dump(is_numeric($x));

echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));

echo "<br>";
$x = "59" + 100;
echo $x."<br>";
var_dump(is_numeric($x));

echo "<br>";
$x = "59a" + 100;
echo $x."<br>";
var_dump(is_numeric($x));

echo "<br>";
$x = "5a9" + 100;
echo $x."<br>";
var_dump(is_numeric($x));

echo "<br>";
$x = "55a9" + 100;
echo $x."<br>";
var_dump(is_numeric($x));
?>