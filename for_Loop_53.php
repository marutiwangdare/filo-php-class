<?php 
/* 
The for loop - Loops through a block of code a specified number of times.

The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value
Examples
The example below displays the numbers from 0 to 10:

Example

$x=0;
while($x<=10){
  echo "the number is : $x <br>";
  $x++;
}

*/

for ($x = 0; $x <= 5; $x++) {
  echo "The number is: $x <br>";
}

echo "<br>";

for ($x = 5; $x >= 1; $x--) {
    echo "The number is: $x <br>";
}

echo "<br>";



/* 
$x
0
1
2
3
4

1
3
5
7
9


The number is: 0
The number is: 1
The number is: 2
The number is: 3
*/
?>