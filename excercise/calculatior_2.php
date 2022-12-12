<?php 

$x=10;
$y=5;

$operation = '/';

switch($operation)
{
    case "+":
        echo "addtion is : ".$x+$y;
    break;    

    case "-":
        Echo "subtraction is: " .$x-$y;
    break;

    case "*":
        Echo "multiplication is: " .$x*$y;
    break;

    case "/":
        Echo "division is: " .$x/$y;
    break;

    default:
        echo "<br>operation not available";
}


?>