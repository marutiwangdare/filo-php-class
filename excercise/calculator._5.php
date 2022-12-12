<?php 


function calculator($num1,$num2,$operation)
{
    switch($operation)
    {
        case "+":
            echo "<br>addition is:". $num1 + $num2;
        break;
        
        case "-":
            echo "<br>substraction is:". $num1 - $num2;
        break;

        case "*":   
            echo "<br>multiplication is:". $num2 * $num1;   
        break;

        case "/":   
            echo "<br>division is:". $num1 / $num2;   
        break;
        
        default:
            echo "<br>operation not available";
    }
}

calculator(10,20,"+");
calculator(100,20,"-");
calculator(10,5,"*");
calculator(10,5,"/");
//calculator(10,"*",5);



?>
