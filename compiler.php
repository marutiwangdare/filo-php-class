<?php

$phoneErr = "";
$emailErr= "";
$phone= "";
$email= "";

//phone section. 

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if(empty($_POST["phone"]))
  {
    $phoneErr = "phone number is required";
  } 
  else 
  {
    $phone = $_POST["phone"];
  }
  
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

  Phone: <input type="tel" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $phone;
echo "<br>";
echo $email;

?>