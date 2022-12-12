<?php 


$input = array(1,7,9,2,3,4);

$size = 6;

for($i=0; $i<$size; $i++){

    for($j=0; $j< $size-1-$i; $j++){

        if($input[$j] > $input[$j+1]){
            $temp = $input[$j];
            $input[$j] = $input[$j+1];
            $input[$j+1] = $temp;
        }
        print_r($input);
        echo "<br>";
    }
    print_r($input);
    echo "<br>";

}

print_r($input);

?>