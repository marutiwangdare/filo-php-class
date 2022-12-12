<?php 

$colors = array("red", "green", "blue", "yellow","orange");

foreach ($colors as $value) {
  echo "<div style='background:".$value.";padding:10px;'>".$value."</div>";
}

?>

<!--
<div style="background:green;padding:10px">green</div>
<div style="background:pink;padding:10px">pink</div>
-->