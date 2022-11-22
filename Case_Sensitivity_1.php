<?php 
/*
PHP Case Sensitivity
In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, 
and user-defined functions are not case-sensitive.

In the example below, all three echo statements below are equal and legal:
*/
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

/*
Note: However; all variable names are case-sensitive!

Look at the example below; only the first statement will display the value of the $color variable! 
This is because $color, $COLOR, and $coLOR are treated as three different variables:
*/

$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>