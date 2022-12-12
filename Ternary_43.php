<?php 

/* 
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	
*/


$user = 1;
//echo $user;

//var_dump($user == 10);

echo "<br>";

$status = $user == 1 ? "logged in" : "anonymous";
echo $status;
echo("<br>");

$user = 0;
$status = $user == 1 ? "logged in" : "anonymous";
echo $status;

echo("<br>");

$cond = true;
$status = $cond ? "i am true" : "i am false";
echo $status;

echo("<br>");

$cond = false;
$status = $cond ? "i am true" : "i am false";
echo $status;
?>