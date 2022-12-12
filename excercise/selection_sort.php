<?php 

$input = array(2,5,8,9,7,6);

$size = 6;
for($i=0; $i < $size; $i++){

    $min = $i;

    for($j = $i; $j < $size; $j++){

        if($input[$j] < $input[$min]){
            $min=$j;
        }
       
    }
   
    $temp = $input[$i];
    $input[$i] = $input[$min];
    $input[$min] = $temp;

}

print_r($input);
echo "<br>";

?>