<?php 
/* 
PHP Functions - Returning values
To let a function return a value, use the return statement:

Example
*/

function addNumber($x , $y) {
  $z = $x + $y;
  return $z;
}

$result = addNumber(10,20);
echo $result;

$output = addNumber(1,2) * addNumber(3,4);

//$output = 3 * 7;

echo "<br>";
echo $output;


/*
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
*/
?>