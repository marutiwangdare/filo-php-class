<?php 
/*
Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:

Example
*/

$cars = array("Volvo", "BMW", "Toyota");

print_r($cars);

rsort($cars);

echo "<br><br>after rsort() function<br>";

print_r($cars);

echo "<br><br>";

$numbers = array(4, 6, 2, 22, 11);

print_r($numbers);

rsort($numbers);

echo "<br><br>after rsort() function<br>";

print_r($numbers);
?>