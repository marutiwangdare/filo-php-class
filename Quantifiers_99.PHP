<?PHP 
/*
Quantifiers define quantities:

Quantifier	Description

n+	Matches any string that contains at least one n
n*	Matches any string that contains zero or more occurrences of n
n?	Matches any string that contains zero or one occurrences of n
n{x}	Matches any string that contains a sequence of X n's
n{x,y}	Matches any string that contains a sequence of X to Y n's
n{x,}	Matches any string that contains a sequence of at least X n's


Note: If your expression needs to search for one of the special characters you can use a backslash ( \ ) to escape them. 
For example, to search for one or more question marks you can use the following expression: $pattern = '/\?+/';
*/


/*
Exact count {n}

A number in curly braces {n}is the simplest quantifier. When you append it to a character or character class, 
it specifies how many characters or character classes you want to match.

For example, the regular expression /\d{4}/ matches a four-digit number. It is the same as /\d\d\d\d/:
*/

$str = "catssss8559898";

$pattern = "/\d{4}/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 


/*
The range {n,m}

The range matches a character or character class from n to m times.

For example, to find numbers that have two, three, or four digits, you use the regular expression
*/
$str = "catssss12345";

$pattern = "/\d{2,4}/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 

/*
Because the upper limit is optional, the {n,} searches for a sequence of n or more times. 
For example, the regular expression /\d{2,}/ will match any number that has two or more digits.
*/
$str = "catssss12546464";

$pattern = "/\d{2,}/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result);

/*
+

The quantifier {1,} means one or more which has the shorthand as +. For example, the \d+ searches for numbers:
*/
$str = "catssss4879";

$pattern = "/\d+/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 

/*
?

The quantifier ? means zero or one. It is the same as {0,1}. For example, /colou?r/ will match both color and colour:
*/
$str = "colour";

$pattern = "/colou?r/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 

/*
*

    Means “zero or more”, the same as {0,}. That is, the character may repeat any times or be absent.

    For example, \d0* looks for a digit followed by any number of zeroes (may be many or none):

    100, 10, 1
*/

$str = "100";

$pattern = "/\d0*/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 

?>
