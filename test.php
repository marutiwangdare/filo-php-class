<?php 

echo '$_REQUEST Super global variable data :';
print_r($_REQUEST);

echo "<br><br><br>";
/*
if($_REQUEST['fname']=="jio")
    echo "logged in successfully <br> <b>welcome jio</b>";
else    
    echo "data not found <br> not logged in";
*/

if($_REQUEST['email']=="jio@gmail.com" && $_REQUEST['password']=="123")

 echo "You are logged in successfully <br> <b> welcome User </b>";
else    
    echo "data not found <br> not logged in";


?>


<!-- 


create login form 

user id 
password 

one button 

send data to auth.php

and after clicking on login button say welcome and say user name of user

welcome joi

-->
