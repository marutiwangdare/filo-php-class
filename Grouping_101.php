<?php 
/*
Grouping
You can use parentheses ( ) to apply quantifiers to entire patterns. 
They also can be used to select parts of the pattern to be used as a match.

Example
Use grouping to search for the word "banana" by looking for ba followed by two instances of na:

*/
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/";
echo preg_match($pattern, $str); // Outputs 1

?>