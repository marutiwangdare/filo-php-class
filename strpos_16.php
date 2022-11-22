<?php 
/* 
strpos() - Search For a Text Within a String

The PHP strpos() function searches for a specific text within a string. 
If a match is found, the function returns the character position of the first match.
If no match is found, it will return FALSE.


Search for the text "world" in the string "Hello world!":

    Tip: The first character position in a string is 0 (not 1).
*/

$str = "Hello world!";
$ser = "world";

echo strpos($str , $ser); // outputs 

echo "<br>";

$str = "Hello world!";
$ser = "Hello";

echo strpos($str , $ser); // outputs 

echo "<br>";

$str = "Hello world!";
$ser = "x";

$result =  strpos($str , $ser);

echo $result." result<br>";

var_dump($result)// outputs 
?>