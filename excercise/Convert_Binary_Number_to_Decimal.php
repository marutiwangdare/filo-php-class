<?php 
$num = 1111;

$cnt = 0;
$result = 0;

while($num!=0){

	$temp = $num%10;
    
    $result +=  $temp*(2**$cnt);
    
    $num = $num/10;
    
    $cnt++;

}

echo $result;

?>