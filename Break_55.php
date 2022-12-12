<?php 
/* 
PHP Break
You have already seen the break statement used in an earlier chapter of this tutorial. 
It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 4:

Example
*/
for ($x = 1; $x <= 10; $x++) {

  if ($x == 4) {
        break;
  }

  echo "<br>The number is: $x <br>";
}


for ($x = 1; $x <= 10; $x++) {

    echo "<br>The number is: $x <br>";

    if ($x == 4) {
        break;
    }
}

/* 
$x
1
2
3

The number is: 1
The number is: 2
*/

?>
