<?php 

/* 

****
****
****
****

*/

echo "*****"."<br>";
echo "*****"."<br>";
echo "*****"."<br>";
echo "*****"."<br>";

echo "<br><br><br><br>";

function rowPrint($cnt)
{
    for ($x = 1; $x <=$cnt; $x++) {
        echo "*";
    }
   
}

rowPrint(50);
echo "<br>";
rowPrint(5);
echo "<br>";
rowPrint(50);


echo "<br><br><br><br>";

for($y=1; $y<=3; $y++)
{
    rowPrint(3);
    echo "<br>";
}

  /*
  y
  1
  2
  3
  4

  ***
  ***
  ***

  */

  echo "<br><br><br><br>";

  For($y=1; $y<=10; $y++)
  {
    rowPrint(10); 
    echo "<br>";
  }


?>