<?php 
/* 
Random Numbers
The rand() function generates a random number:

Example

*/

echo(rand())."<br>";


/* 
To get more control over the random number,
 you can add the optional min and max parameters to specify the lowest integer and the highest 
 integer to be returned.

For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):

Example
*/

echo(rand(10, 100))."<br>";


$str=rand();
$result = md5($str);
echo $result;
?>