<?php 
/* 
With PHP, there are two basic ways to get output: echo and print.

In this tutorial we use echo or print in almost every example. 
So, this chapter contains a little more info about those two output statements.

PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it 
can be used in expressions. 

echo can take multiple parameters (although such usage is rare) while print can take one argument. 
echo is marginally faster than print.

The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().

Display Text

The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
*/

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br></div>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

/* 
Display Variables

The following example shows how to output text and variables with the echo statement:
*/

$txt1 = "Learn PHP";
$txt2 = "website";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "1 Study PHP at " . $txt2 . "<br>";

echo "2 Study PHP at $txt2<br>";

echo '2 Study PHP at $txt2<br>';

echo $x + $y."<br>";

echo "$x + $y"."<br>";

echo $txt1.$txt2;

?>

<h2>php is fun</h2>