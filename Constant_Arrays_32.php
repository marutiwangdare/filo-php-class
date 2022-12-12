<?php 
/* 
PHP Constant Arrays
In PHP7, you can create an Array constant using the define() function.

Example
Create an Array constant:
*/
define("cars", ["Alfa Romeo","BMW","Toyota"]);
echo cars[0];

echo "<br>";

define("cars", ["apple","mango","orange"]);
echo cars[0];

echo "<br>";

$cars= array("php","java","css");
echo $cars[0];

echo "<br>";

$cars= array("maths","physics","bio");
echo $cars[0];
?>