<?php 
/* 
PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()

*/

// Check if the type of a variable is integer   
$x = 5985;
$result = is_int($x); 
var_dump($result);

echo "<br>";

// Check again... 
$x = 59.85;
$result = is_int($x); 
var_dump($result);

echo "<br>";

$x = "100";
$result = is_int($x); 
var_dump($result);
?>