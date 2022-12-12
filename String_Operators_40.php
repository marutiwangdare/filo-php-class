<?php 
/* 
PHP String Operators
PHP has two operators that are specially designed for strings.

Operator	Name	Example	Result	Show it

.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
*/

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

echo "<br>";

echo $txt1;

echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";

$txt1 .= $txt2;

echo "<br>";
echo $txt1;

echo "<br>";
echo $txt2;

echo "<br>";
$txt1 = "Hello";
$txt2 = " world!";

$txt2 .= $txt1;

echo "<br>";
echo $txt2;

echo "<br>";
echo $txt1;
?>