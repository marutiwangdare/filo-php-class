<?php 

for($row=1; $row<=10; $row++)
{
    echo "<br> <b>row:$row</b> <br>";

    for($col=1; $col<=3; $col++)
    {
        echo " col:$col ";
    }

}

echo "<br><br><br>";

for($row=1; $row<=5; $row++)
{
    echo "<br> <b> $row</b> :";

    for($col=1; $col<=3; $col++)
    {
        echo " $col ";
    }

}

/*
1 2 3 4 5 6 7 8 9 10
2 4 6 8 10 12
3 6 9 12
*/

?>