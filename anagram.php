<?php
/*
An anagram is word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once. For example, the word anagram can be rearranged into "nag a ram".

Example
Eleven plus two = Twelve plus one
School master = The classroom
Shakespeare = Keshareapes

[1] [Wikipedia](https://en.wikipedia.org/wiki/Anagram)
[2] [Anagram](https://literarydevices.net/anagram/)
*/

/*
Without inbuild function 
1. Keep only numbers and letters
2. To lower case (or use strcasecmp at the end)
3. Split the word into characters array
4. Arrange the order into ascending
5. Character Array into word
*/
function is_anagram_without_inbuild_function($string1, $string2){
	$pharse1 = implode('', sort(str_split(strtolower(preg_replace('/[^a-z\d]+/i', '', $string1)))));
	$pharse2 = implode('', sort(str_split(strtolower(preg_replace('/[^a-z\d]+/i', '', $string2)))));

	return ($pharse1===$pharse2)?1:"";
}

/*
count_chars — Return information about characters used in a string
http://php.net/manual/en/function.count-chars.php
*/
function is_anagram($string1, $string2){
	return (count_chars($string1, 1) == count_chars($string2, 1));
}

$string1 = 'Eleven plus two';
$string2 = 'Twelve plus one';
echo is_anagram_without_inbuild_function($string1,$string2);   // output: 1
echo is_anagram($string1,$string2);   // output: 1

$string1 = 'School master';
$string2 = 'The classroom';
echo is_anagram_without_inbuild_function($string1,$string2);   // output: 1
echo is_anagram($string1,$string2);   // output: 1
?>