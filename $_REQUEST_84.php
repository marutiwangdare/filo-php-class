<?php 
/* 

PHP Superglobal - $_REQUEST
Super global variables are built-in variables that are always available in all scopes.

PHP $_REQUEST
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. 
When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. 
In this example, we point to this file itself for processing form data. 
If you wish to use another PHP file to process form data, replace that with the filename of your choice. 
Then, we can use the super global variable $_REQUEST to collect the value of the input field:
*/

echo '$_REQUEST Super global variable data :';
print_r($_REQUEST);

echo '<br><br><br>';

echo $_SERVER['PHP_SELF'];

echo '<br><br><br>';
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Email: <input type="text" name="email">
  <input type="submit">
</form>

<form method="post" action="test.php">
  Name: <input type="text" name="fname">
  Email: <input type="text" name="email">
  <input type="submit">
</form>


<form method="post" action="auth.php">

  Name: <input type="text" name="fname" placeholder="user name">
  
Email: <input type="text" name="email">

Password: <input type="text" name="password">

  <input type="submit" value="login">

</form>


<form method="post" action="test.php">
  
 Email: <input type="text" name="email" placeholder="enter email">

Password: <input type="text" name="password" placeholder="enter password">

  <input type="submit" value="login">
</form>
