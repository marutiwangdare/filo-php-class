<?php

$start = 1534;
$end = 371;


$num1 = $start % 10;
$num2 = (int) ($start / 10);
$num3 = $num2 % 10;

echo $num1 . "<br>";
echo $num2 . "<br>";
echo $num3 . "<br>";

echo "<br><br>";

while ($start > 0) {
    $temp = $start % 10;

    echo $temp . "<br>";

    $start = (int) ($start / 10);
}
