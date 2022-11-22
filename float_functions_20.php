<?php 
/* 
PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()
*/

$x = 10.365;
var_dump(is_float($x));

echo "<br>";

$x = 365;
var_dump(is_float($x));

?>