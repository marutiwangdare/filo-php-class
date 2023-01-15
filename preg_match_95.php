<?php 
/*
Using preg_match()
The preg_match() function will tell you whether a string contains matches of a pattern.

Example
Use a regular expression to do a case-insensitive search for "google" in a string:
*/

$str = "Visit Google";

$pattern = "/google/i";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1



$pattern = "/google/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1
?>