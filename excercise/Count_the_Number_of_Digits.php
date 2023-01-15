<?php

$n=1000;
$cnt=0;

while($n!=0)
{
	$n = (int)($n/10);
    $cnt++;
}
echo $cnt;

?>