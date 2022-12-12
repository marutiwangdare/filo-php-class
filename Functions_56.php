<?php 
/* 
The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

PHP Built-in Functions
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

Please check out our PHP reference for a complete overview of the PHP built-in functions.

PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions.

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
Create a User Defined Function in PHP
A user-defined function declaration starts with the word function:

Syntax
function functionName() {
  code to be executed;
}
Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

Tip: Give the function a name that reflects what the function does!

In the example below, we create a function named "writeMsg()". 
The opening curly brace ( { ) indicates the beginning of the function code, 
    and the closing curly brace ( } ) indicates the end of the function.
 The function outputs "Hello world!". 
 To call the function, just write its name followed by brackets ():
*/


function writeMsg(){
    echo "Hello world!<br>";
}

function breadMaker(){
    echo "here are process to make the roti";
}

echo "hello jio<br>";
echo "hello jio<br>";
echo "hello jio<br>";
echo "hello jio<br>";
echo "hello jio<br>";

echo "<br>function call<br>";
writeMsg();
writeMsg();
writeMsg();

?>