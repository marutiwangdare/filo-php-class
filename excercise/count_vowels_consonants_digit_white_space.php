<?php

$sentence = "a b1c3eio";
$length = strlen($sentence);
$vowels = 0;
$consonants = 0;
$digits = 0;
$white_spaces = 0;
$vowl = array('a','e','i','o','u');
$dgt = array('0','1','2','3','4','5','6','7','8','9');


for($i=0; $i<$length; $i++){

	$ch = $sentence[$i];
    
	if($ch ==" ")
    	$white_spaces++;
        
   	elseif(in_array($ch, $dgt, true))
    	$digits++;
        
    elseif(in_array($ch, $vowl))
    	$vowels++;    
        
    else if($ch >= 'a' &&  $ch <= 'z')  
    	$consonants++;
        
}

echo "vowels:$vowels"."<br>";
echo "consonants:$consonants"."<br>";
echo "digits:$digits"."<br>";
echo "white_spaces:$white_spaces"."<br>";
?>