<?php 
/*
PHP - The if...elseif...else Statement

The if...elseif...else statement executes different codes for more than two conditions.
Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
Example

Output "Have a good morning!" if the  time is less than 10, and "Have a good day!" if the  time is less than 20.
 Otherwise it will output "Have a good night!":
*/    
$t = 9;

if ($t < 10) 
{
 echo "Have a good morning!";
} 
elseif ($t < 20) 
{
  echo "Have a good day!";
} 
else 
{
 echo "Have a good night!";
}

$t = 10;

if ($t < 10) 
{
 echo "<br>Have a good morning!";
} 
elseif ($t < 20) 
{
  echo "<br>Have a good day!";
} 
else 
{
 echo "<br>Have a good night!";
}

$t = 20;

if ($t < 10) 
{
 echo "<br>Have a good morning!";
} 
elseif ($t < 20) 
{
  echo "<br>Have a good day!";
} 
else 
{
 echo "<br>Have a good night!";
}

$t = true;

if ($t) 
{
 echo "<br>i am first!";
} 
elseif ($t) 
{
  echo "<br>i am second!";
} 
else 
{
 echo "<br>i am third!";
}

$t = false;

if ($t) 
{
 echo "<br>i am first!";
} 
elseif ($t) 
{
  echo "<br>i am second!";
} 
else 
{
 echo "<br>i am third!";
}
?> 