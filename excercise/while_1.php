<?php 
$x = 5; // from where to start 
 
while($x >= 1) { // where to end
  echo "The number is: $x <br>";
  $x--; // how many step per iteration
}

echo "<br>";

$x=2;
while($x<=20){
  echo "the number is : $x <br>";
  $x+=2;
}

echo "value of x after loop ends".$x;
/* 
$x
5
4
3
2
1
0



The number is: 5
The number is: 4
The number is: 3
The number is: 2
The number is: 1

2
4
6
.20
*/

?>