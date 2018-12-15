<?php

/*
 for ($x = 1; $x <= 10; $x++){
	 // echo $x . '<br>';
 }
*/

/* the second example
   $totalItems = 210;
   $itemsPerPage = 25;
   
   $pageCount = $totalItems / $itemsPerPage;
   
   //echo $pageCount;
   
   for ($i = 1; $i <= $pageCount; $i = $i++){
	   echo '<a href="?page-' . $i . '">'. $i .'</a> ';
   }
*/

/* the third example
 $names = ['alex', 'billy', 'dale'];
 
 for ($i = 0; $i < count($names); $i++){
	 echo $i, '<br>';
 }
*/

 $names = ['alex', 'billy', 'dale', 'tabby'];
 
 for ($i = 0; $i < count($names); $i++){
		echo $names[$i], '<br>';

?>