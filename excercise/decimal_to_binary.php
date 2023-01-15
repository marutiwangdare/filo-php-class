<?php


$num = 13;
$binary = "";
while($num!=0){

 	$binary.= $num % 2;
	$num = (int)($num / 2);

}

echo strrev($binary);


/* 
function convert($n) {
  $bin = 0;
  $rem = $i = 1;

  while ($n!=0) {
    $rem = (int)($n % 2);
    $n = (int)($n/2);
    $bin += $rem * $i;
    $i *= 10;
  }

  return $bin;
}

echo convert(13);
*/

/* 
$num 13 6 3 1 0

6 3 1 0
*/

?>