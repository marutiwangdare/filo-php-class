<?php 
/* 
An integer is a palindrome if the reverse of that number is equal to the original number.


*/
$input = $num = 121;

while($num > 0)
{
	$result.= $num % 10; 
    $num = (int) ($num/10);
}

if($result==$input)
	echo $input." is palindrome";
else
	echo $input." is not palindrome";
?>