<?php 
/*
PHP $_GET
PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.

Assume we have an HTML page that contains a hyperlink with parameters:

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>
When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", 
and you can then access their values in "test_get.php" with $_GET.

The example below shows the code in "test_get.php":

Example

*/
echo '<form method="get" action="test_get.php">';
echo  'from php : <input type="text" name="subject">';
echo "</form>";
?>
<html>
<body>

<a href="test_get.php?search=Apple">Click me on</a>

<br><br>

<a href="test_get.php?subject=PHP&web=google.com">Test $GET</a>

<br><br>

<form method="get" action="test_get.php">
subject: <input type="text" name="subject">
web: <input type="text" name="web">
  <input type="submit">
</form>


<form method="post" action="test_get.php">
subject: <input type="text" name="subject">
web: <input type="text" name="web">
  <input type="submit">
</form>
</body>
</html>