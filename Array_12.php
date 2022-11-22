<?php 
/*
PHP Array
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
*/

$car1 = "Volvo";
$car2 = "BMW";
$car3 = "Toyota";
$car4 = "honda";

echo $car1."<br>";
echo $car2."<br>";
echo $car3."<br>";
echo $car4."<br>";

$cars = array("Volvo","BMW","Toyota","honda");

var_dump($cars);

echo "<br>";
echo $cars[0]."<br>";
echo $cars[1]."<br>";
echo $cars[2]."<br>";
echo $cars[3];
?>