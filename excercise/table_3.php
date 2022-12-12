<?php 
function table($num)
{
    $end = $num*10;
    for($i=$num; $i <= $end; $i+=$num){

        echo "$i ";
    }
    echo "<br>";
}



echo "<br>";

for($i=1; $i<=20; $i++){
    table($i);
}

?>