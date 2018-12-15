<?php
/*
      while(false){
		  echo 'Will this run?';
	  }
*/

/* the first example
     $currentNumber = 0;
	 $endAt = 9;
	 $incrementBy = 1;

   while ($currentNumber <= $endAt){
	   $currentNumber += $incrementBy;
	   echo $currentNumber, '<br>';
   }
*/

/*
 $numberIwant = 3;
 
 //echo rand(1, 6);
   
 while (($diceRoll = rand(1, 6)) !== $numberIwant) {
	 echo "You rolled a {$diceRoll}, we need a {$numberIwant}<br>";
 }   
 
   echo "You rolled a {$numberIwant}!";
*/

    while (false){
		echo 'This will never run.';
	}
	
	do {
		echo 'This will be run at least once.';
	} while (false);
   
?>