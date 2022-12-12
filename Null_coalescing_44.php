<?php 
/* 
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7
*/

$expr1=10;
$expr2=20;

$x = $expr1 ?? $expr2;

echo $x;

$expr1=NULL;
$expr2=30;

$x = $expr1 ?? $expr2;
echo "<br>";
echo $x;


$expr11='';
$expr22=50;
//var_dump($expr11);
$x = $expr11 ?? $expr22;
echo "<br>";
echo $x;

//$expr3;
//var_dump($expr3);
$expr4=40;

$x = $expr3 ?? $expr4;
echo "<br>";
echo $x;
?>