<?php 

function table($num)
{
    $end = $num*10;
    for($i=$num; $i <= $end; $i+=$num){

        echo "$i ";
    }
    echo "<br>";
}



table(1);
table(2);
table(3);
table(4);
table(5);



/* 
$num 
2

$end 
20

$i
2
4
6
8
10
12
14
16
18
20
22


2 4 6 8 10 12 14 16 18 20

*/
?>
