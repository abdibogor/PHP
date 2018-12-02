<?php

// = 
// == equal
// === identical 

/*
$sentence = 'This is tutorial number 21';
$needle = 'n';

$search = strpos($sentence , $needle);

if ($search === FALSE){
   echo 'The string was not found';
} else {
	echo 'The position of the string is ' . $search ;
}
*/

$email = "testing@gmail.com";
$needle = "n";

$search = strpos($email, $needle);

if ($search === FALSE)
{
  echo 'This is not a valid email';
} else {
  echo 'This is a valid email';
}

?>