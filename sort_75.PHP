<?PHP 
/*
Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:

Example

*/
$cars = array("Volvo", "BMW", "Toyota");

//echo $cars;

print_r($cars);

sort($cars);

echo "<br><br>after sort() function<br>";

print_r($cars);

echo "<br><br><br>";

$num= array(3, 8, "7", "6", "0");

print_r($num);

sort($num);

echo "<br><br>after sort() function<br>";

print_r($num);

?>