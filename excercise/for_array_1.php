<?php 

$colors = array("red", "green", "blue", "yellow", "white", "gray", "orange");

/*foreach ($colors as $value) {
  echo "color is :$value <br>";
}
*/

echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";

echo "<br><br>";

for($i=0;$i<=3;$i++){
   // echo $i."<br>";
    echo $colors[$i]."<br>";
}

$length = count($colors);

echo "<br> elements in array: $length";
echo "<br><br>";

for($i=0;$i<=$length-1;$i++){
  // echo $i."<br>";
   echo $colors[$i]."<br>";
}
?>