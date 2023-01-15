<?PHP 
/*
This and the next chapters show how to use PHP to validate form data.

PHP Form Validation
Think SECURITY when processing PHP forms!

These pages will show how to process PHP forms with security in mind. 
Proper validation of form data is important to protect your form from hackers and spammers!

The HTML form we will be working at in these chapters, 
contains various input fields: required and optional text fields, radio buttons, and a submit button:

The validation rules for the form BELOW are as follows:

Field	Validation Rules
Name	Required. + Must only contain letters and whitespace
E-mail	Required. + Must contain a valid email address (with @ and .)
Website	Optional. If present, it must contain a valid URL
Comment	Optional. Multi-line input field (textarea)
Gender	Required. Must select one
First we will look at the plain HTML code for the form:


 When the form is submitted, the form data is sent with method="post".

What is the $_SERVER["PHP_SELF"] variable?

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. 


What is the htmlspecialchars() function?

The htmlspecialchars() function converts special characters to HTML entities. 
This means that it will replace HTML characters like < and > with &lt; and &gt;. 
This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

Big Note on PHP Form Security
The $_SERVER["PHP_SELF"] variable can be used by hackers!

If PHP_SELF is used in your page then a user can enter a slash (/) and then some Cross Site Scripting (XSS) commands to execute.

Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications.
 XSS enables attackers to inject client-side script into Web pages viewed by other users.   
*/

//ECHO "<script>alert('hi')</script>";
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 
print_r($_POST['comment']);
?>