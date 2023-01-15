<?php 
/*
https://suragch.medium.com/how-to-match-any-single-character-with-a-regular-expression-421b9fc13681

Metacharacters
Metacharacters are characters with a special meaning:

Metacharacter	Description
|	Find a match for any one of the patterns separated by | as in: cat|dog|fish

.	Find just one instance of any character
        Use the dot . character as a wildcard to match any single character.

Example regex: a.c

abc   // match
a c   // match
azc   // match
ac    // no match
abbc  // no match

^	Finds a match as the beginning of a string as in: ^Hello

$	Finds a match at the end of the string as in: World$

\d	Find a digit

/D : matches any non-digit characters

\s	Find a whitespace character

/S : matches any non-whitespace characters

\b	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b

matches any word boundary (this would include spaces, dashes, commas, semi-colons, etc)

Consider this is the string and pattern to be searched for is 'cat':

text = "catmania thiscat thiscatmaina";

Now definitions,

'\b' finds/matches the pattern at the beginning or end of each word.

'\B' does not find/match the pattern at the beginning or end of each word.

Different Cases:

Case 1: At the beginning of each word

result = text.replace(/\bcat/g, "ct");

Now, result is "ctmania thiscat thiscatmaina"

Case 2: At the end of each word

result = text.replace(/cat\b/g, "ct");

Now, result is "catmania thisct thiscatmaina"

Case 3: Not in the beginning

result = text.replace(/\Bcat/g, "ct");

Now, result is "catmania thisct thisctmaina"

Case 4: Not in the end

result = text.replace(/cat\B/g, "ct");

Now, result is "ctmania thiscat thisctmaina"

Case 5: Neither beginning nor end

result = text.replace(/\Bcat\B/g, "ct");

Now, result is "catmania thiscat thisctmaina"


\uxxxx	Find the Unicode character specified by the hexadecimal number xxxx
*/

$str = "catssss";

$pattern = "/cat|dog|fish/";

ECHO "<BR> searching for pattern: $pattern in ($str) <br>";

$result = preg_match($pattern, $str); 

var_dump($result); 
?>