<?php

  
		/*
	   function add($num1, $num2, $num3){
		   return $num1 + $num2 + $num3;
	   }
	   
	   echo add(5, 10, 10);
	   */

	    /*
		function add(array $numbers){
			$total = 0;
			
			foreach ($numbers as $number){
				$total += $number;
			}
			return $total;
		}
		
   //$numbers = [5, 10, 10, 1];	
     echo add([5, 10, 10, 1]);
	 */
	 
	 /*
	 function add(){
		 //var_dump(func_get_args());
		 
		   $total = 0;
		   
		   foreach(func_get_args() as $number){
			   if(!is_numeric($number)){
				   continue;
			   }
			   
			   $total += $number;
		   }
		   
		  return $total;
	 }
	 
	 echo add(5, 10, 10);
	 */
	 
	 
	     function add(){
		     return array_sum(func_get_args());	 
		 }
		 echo add(5, 10, 10);
		 //echo array_sum([5, 10, 10]);
	 
	 
?>