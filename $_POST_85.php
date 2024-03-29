<?php 
/* 
Super global variables are built-in variables that are always available in all scopes.

PHP $_POST
PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
$_POST is also widely used to pass variables.

The example below shows a form with an input field and a submit button. 
When a user submits the data by clicking on "Submit", 
the form data is sent to the file specified in the action attribute of the <form> tag. 
In this example, we point to the file itself for processing form data. 
If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
Then, we can use the super global variable $_POST to collect the value of the input field:

Example

*/

echo "request method is : ".$_SERVER["REQUEST_METHOD"];

echo "<br>name entered by user is :".$_POST['fname'];
?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>