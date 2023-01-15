<?Php 
/*
Sort Array (Ascending Order), According to Key - ksort()
The following example sorts an associative array in ascending order, according to the key:

Example

*/
$age = array("Peter"=>"3", "Ben"=>"7", "Joe"=>"4");

print_r($age);

ksort($age);

echo "<br><br>after ksort() function<br>";

print_r($age);
?>