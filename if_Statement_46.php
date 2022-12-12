<?php 
/* 
PHP - The if Statement

The if statement executes some code if one condition is true.
Syntax
if (condition) {
  code to be executed if condition is true;
}
Example

Output "Have a good day!" if the  time is less than 20:
 
*/
$t = 10;

if ($t < 20) 
{
    echo "Have a good day!";
}


$t = 30;

if ($t < 20) 
{
    echo "<br>Have a good night!";
}

if(true)
{
    echo "<br>i always execute";
}

if(false)
{
    echo "<br>i always not execute";
}
?>