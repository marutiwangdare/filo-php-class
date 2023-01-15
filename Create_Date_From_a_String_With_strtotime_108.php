<?php 
/*
Create a Date From a String With strtotime()
The PHP strtotime() function is used to convert a human readable date string into a 

Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

Syntax
strtotime(time, now)
The example below creates a date and time from the strtotime() function:

Example
<?php

?>
*/
$d = strtotime("10:30pm April 15 2014");

echo "Created date is " . date("Y-m-d h:i:sa", $d);

/*PHP is quite clever about converting a string to a date, so you can put in various values: */

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>