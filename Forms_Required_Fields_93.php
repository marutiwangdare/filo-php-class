<?php 
/*
PHP Forms - Required Fields
This chapter shows how to make input fields required and create error messages if needed.

PHP - Required Fields
From the validation rules table on the previous page, we see that the "Name", "E-mail", fields are required. 
These fields cannot be empty and must be filled out in the HTML form.



In the following code we have added some new variables: $nameErr, $emailErr, 

These error variables will hold error messages for the required fields. 
We have also added an if else statement for each $_POST variable. 
This checks if the $_POST variable is empty (with the PHP empty() function). 
If it is empty, an error message is stored in the different error variables, and if it is not empty,
 
*/

// define variables and set to empty values
$nameErr = "" ;
$emailErr = "";
$name = ""; 
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = $_POST["name"];
  }
  
 
 $email = $_POST["email"];
  
   
}
?>
<style>
.error {
    color: red;
    }
</style>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;

?>