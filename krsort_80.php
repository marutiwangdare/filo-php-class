<?php 
/*
Sort Array (Descending Order), According to Key - krsort()
The following example sorts an associative array in descending order, according to the key:

Example

*/
$age = array("Peter"=>"3", "Ben"=>"7", "Joe"=>"4");

print_r($age);

krsort($age);

echo "<br><br>after ksort() function<br>";

print_r($age);
?>