<?php 
/*
To loop through and print all the values of an associative array, you could use a foreach loop, like this:

Example
*/
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    
    foreach($age as $key => $value) {
      echo "Key=" . $key . ", Value=" . $value;
      echo "<br>";
    }

    echo "<br>";

    $Fruit = array("Apple"=>"$5", "Pear"=>"$10", "Oranges"=>"$15");
    
    foreach($Fruit as $key => $value) {
      echo $key." price is : ".$value;
      echo "<br>";
    }

?>