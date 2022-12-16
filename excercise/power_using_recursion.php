<?php

function power($num,$pow){

	if($pow>0)
    	return  $num * power($num,--$pow);
    else
    	return 1;
}

echo power(2,2)

?>