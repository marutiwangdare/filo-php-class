<?php 
/* 
PHP Constants
Constants are like variables except that once they are defined they cannot be changed or undefined.

PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.

Syntax

define(name, value)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant

Example

*/
define("GREETING", "Welcome to google.com!");

echo GREETING;


define("GREETING", "Welcome to yahoo.com!");

echo GREETING;
echo "<br>";

define("greeting", "Welcome to bing!");

echo greeting;

echo "<br>";

define("GREETing", "Welcome to facebook!");

echo GREETing;

$num = 123456789;

$a = 10;
$a = "sdfasdf"
?>
