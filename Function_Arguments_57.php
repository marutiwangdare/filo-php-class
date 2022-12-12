<?php 
/* 
PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. 
You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). 
When the familyName() function is called, we also pass along a name (e.g. Jani), 
and the name is used inside the function, which outputs several different first names, but an equal last name:

Example
*/

function familyName($fname) {
  echo "$fname ransom. welcome home.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

//echo "jani ransom. welcome home";
//echo "Hege ransom. welcome home";
//echo "stale ransom. welcome home";

?>
