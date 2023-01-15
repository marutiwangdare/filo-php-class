<?PHP 
/*
Regular Expression Patterns
Brackets are used to find a range of characters:

Expression	Description
[abc]	Find one character from the options between the brackets
[^abc]	Find any character NOT between the brackets. only a or b or c is present then not match if ohter than abc it will match.
        If a,b, or C present (no match); Matches anything other than a,b, or c.

Use the hat in square brackets [^] to match any single character except for any of the characters that come after the hat ^.

Example regex: a[^abc]c

aac   // no match
abc   // no match
acc   // no match
a c   // match
azc   // match
ac    // no match
azzc  // no match

(Don’t confuse the ^ here in [^] with its other usage as the start of line character: ^ = line start, $ = line end.)


[0-9]	Find one character from the range 0 to 9
[a-z] 	Matches any one character from lowercase a to lowercase z.
[A-Z] 	Matches any one character from uppercase a to uppercase z.
[0-9] 	Matches a single digit between 0 and 9.
[a-z0-9] 	Matches a single character between a and z or between 0 and 9.
*/

// Example : [abc] will match characters a,b or c in any string.


$str = "abbbbb";

$pattern = "/[abc]/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; 


$str = "abcz";

$pattern = "/[^abc]/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; 

$str = "csdfsdf";

$pattern = "/[0-9]/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

echo $result; 

$str = "@@@@@";

$pattern = "/[a-z A-Z 0-9]/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); // Outputs 1

?>