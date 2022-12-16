<?php 
/*
A positive integer is called an Armstrong number (of order n) if

abcd... = an + bn + cn + dn + 

In the case of an Armstrong number of 3 digits, the sum of cubes of each digit is equal to the number itself. For example, 153 is an Armstrong number because

153 = 1*1*1 + 5*5*5 + 3*3*3
In this program, we will print all the Armstrong numbers between two integers. This means that the two integers will not be part of the range, but only those integers that are between them.

For example, suppose we want to print all Armstrong numbers between 153 and 371. Both of these numbers are also Armstrong numbers.

Then, this program prints all Armstrong numbers that are greater than 153 and less than 371 i.e. 153 and 371 won't be printed even though they are Armstrong numbers.
*/


$start = 200;
$end = 2000;
$sum = 0;

for($i=$start+1; $i<=$end; $i++)
{
	//echo $i."<br>";
    
	$num = $i;
    $digits = 0;
    
    while($num>0){

    	$temp = $num%10;   
    	$digits++;
    	$num = (int) ($num/10);        
	}
    
    $num = $i;
    
	while($num>0){

    	$temp = $num%10;   
    	$sum += $temp**$digits;    
    	$num = (int) ($num/10);        
	}
    if($sum==$i)
    	echo $i."<br>";
        
    $sum=0;    
}

?>