<?php 



/*

$num = 15;
$binary=' ';

$quotient1 = (int)($num / 2);
$binary.= (int)($num % 2);

echo $binary."<br>";

$quotient2 = (int)($quotient1 / 2);
$binary.= (int)($quotient1 % 2);

echo $binary."<br>";

$quotient3 = (int)($quotient2 / 2);
$binary.= (int)($quotient2 % 2);

echo $binary."<br>";

$quotient4 = (int)($quotient3 / 2);
$binary.= (int)($quotient3 % 2);

//echo strrev($binary)."<br>";
*/


$num = 1111;

$cnt = 0;
$result = 0;

while($num!=0){

	$temp = $num%10;
    
    $result +=  $temp*(2**$cnt);
    
    $num = $num/10;
    
    $cnt++;

}

echo $result;

?>