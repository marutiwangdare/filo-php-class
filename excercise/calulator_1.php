<?php 

echo 10+20;
echo "<br>";
echo 20-10;
echo "<br>";
echo 10*20;
echo "<br>";
echo 10/20;

$x = 200;
$y = 100;

echo "<br><br>";
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;

$x = 10;
$y = 5;
$operation = "/";

echo "<br><br>";



if($operation == "+")
    echo "<br>addtion is:".$x+$y;

if($operation == "-")
    echo "<br>substrcat is:".$x-$y;

if($operation == "*")   
    echo "<br>multiplication is:".$x*$y;
    echo "<br>i am after multiplication";

if ($operation == "/"){
    echo "<br>division is: " .$x/$y;
    echo "<br>i am from division";
} 
?>