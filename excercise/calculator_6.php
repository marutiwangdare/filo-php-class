<?php 


function calculator($num1,$num2,$operation)
{
    switch($operation)
    {
        case "+":
            return $num1 + $num2;
        break;
        
        case "-":
            return $num1 - $num2;
        break;

        case "*":   
           return $num2 * $num1;   
        break;

        case "/":   
            return $num1 / $num2;   
        break;
        
        default:
            echo "<br>operation not available";
    }
}



$result=calculator(10,20,"+") + 10;
echo "addition is :".$result;

$result= calculator(100,20,"-");
Echo "<br>subtraction is : " .$result;



?>

<table>
    <tr>
        <td>
            Num 1
        </td>
        <td>
            <input type="text" name="num1" placeholder="num1" >
        </td>
    </tr>
    <tr>
        <td>
            Num 1
        </td>
        <td>
            <input type="text" name="num2" placeholder="num2">
        </td>
    </tr>
    <tr>
        <td>
            result
        </td>
        <td>
        <input type="text" name="result">
        </td>
    </tr>
    <tr>
        <td colspan="2">
             <input type="button" value="+">
             <input type="button" value="-">
        </td>
    </tr>
</table>





