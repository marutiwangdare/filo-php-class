<?php 
/*
Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:

Example

*/
$age = array("Peter"=>"3", "Ben"=>"7", "Joe"=>"4");

print_r($age);

asort($age);

echo "<br><br>after asort() function<br>";

print_r($age);

?>