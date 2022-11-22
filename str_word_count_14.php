<?php 
/* 
str_word_count() - Count Words in a String
The PHP str_word_count() function counts the number of words in a string.

Example
Count the number of word in the string "Hello world!":
*/
echo "1: ";
echo str_word_count("Hello world!"); // outputs 2
echo "<br>2: ";
echo str_word_count("Hello world! Raj 1234"); 
echo "<br>3: ";
echo str_word_count("Hello world! Raj 1234s"); 
echo "<br>4: ";
echo str_word_count(" @ ! &"); 
echo "<br>5: ";
echo str_word_count("v"); 
echo "<br>6: ";
echo str_word_count("&12s"); 
?>