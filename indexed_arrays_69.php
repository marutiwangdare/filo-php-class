<?php 

$cars = array("Volvo", "BMW", "Toyota");

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br><br>";

for($x = 0; $x <3 ; $x++) {
  echo $cars[$x];
  echo "<br>";
}

?>