<?php 
/*
PHP - The if...else Statement

The if...else statement executes some code if a condition is true and another code if that condition is false.
Syntax
if (condition) 
{
  code to be executed if condition is true;
} 
else 
{
  code to be executed if condition is false;
}
Example

Output "Have a good day!" if the  time is less than 20, and "Have a good night!" otherwise:

*/
$t = 10;

if ($t < 20) 
{
  echo "Have a good day!";
} 
else 
{
 echo "Have a good night!";
}

$t = false;

if ($t) 
{
  echo "<br>Have a good day!";
} 
else 
{
 echo "<br>Have a good night!";
}

$t = 1;

if ($t) 
{
  echo "<br>i am one";
} 
else 
{
 echo "<br>i am zero";
}

$t = 0;

if ($t) 
{
  echo "<br>i am one";
} 
else 
{
 echo "<br>i am zero";
}


$t = 0000000000000000;

if ($t) 
{
  echo "<br>i am multi one";
} 
else 
{
 echo "<br>i am multi zero";
}

$t ='';  //echo "<h1>$t</h1>";
if ($t) 
{
  echo "<br>string true part";
} 
else 
{
 echo "<br>string false part";
}

$t ='';
//var_dump($t);
if ($t) 
{
  echo "<br>blank true part";
} 
else 
{
 echo "<br>blank false part";
}

$t = null;
if ($t) 
{
  echo "<br>null true part";
} 
else 
{
 echo "<br>null false part";
}

$t = 2548;
if ($t) 
{
  echo "<br>number true part";
} 
else 
{
 echo "<br>number false part";
}

$t = "abcd";
if ($t) 
{
  echo "<br>string true part";
} 
else 
{
 echo "<br>string false part";
}

$t = "0";
if ($t) 
{
  echo "<br>zero true part";
} 
else 
{
 echo "<br>zero false part";
}

$t = "00";
if ($t) 
{
  echo "<br>double zero true part";
} 
else 
{
 echo "<br>double zero false part";
}

$t = "0a";
if ($t) 
{
  echo "<br>mixed true part";
} 
else 
{
 echo "<br>mixed false part";
}
?>