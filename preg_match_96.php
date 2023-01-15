<?php 

$str = "start and the end of a string, respectively:";

$pattern = "/^the/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1

$str = "the start and the end of a string, respectively:";

$pattern = "/^the/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "start and the end of a string, respectively:";

$pattern = "/the$/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "start and the end of a string, respectively: the";

$pattern = "/the$/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "start and the end of a string, respectively: the";

$pattern = "/^abc$/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1

$str = "abc start and the end of a string, respectively: the abc";

$pattern = "/^abc$/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1

$str = "abc";

$pattern = "/^abc$/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "sdfgsdfgsabc";

$pattern = "/ab*/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "abc";

$pattern = "/ab+/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


/*
Optional character – ( ? )
This symbol tells the computer that the preceding character may
or may not be present in the string to be matched.

Example : 
We may write the format for document file as – “docx?”
The ‘?’ tells the computer that x may or may not be 
present in the name of file format.


Match any character optionally

Use the optional character ? after any character to specify zero or one occurrence of that character. 
Thus, you would use .? to match any single character optionally.

Example regex: a.?c

abc   // match
a c   // match
azc   // match
ac    // match
abbc  // no match
*/

$str = "doc";

$pattern = "/docx?/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1


$str = "abbbbb";

$pattern = "/ab{3,4}/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; // Outputs 1