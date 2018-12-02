<?php
		/*
      function fullName(){
		    echo 'Alex Garrett';
	  }
	  
	  fullName();
	  */
	  
	  /*
	  function fullName(){
		    return 'Alex Garrett';
	  }
	  
	  //echo fullName();
	  
	  $fullName = fullName();	  
	  echo $fullName; 
     */	  
	 
	         /* the second example
	  function fullName($firstName, $lastName){
		  return $firstName . ' ' . $lastName;	  
	  }
	  
	  $fullName = fullName('Alex', 'Garrett');

    echo $fullName;	  
	*/
	
	/*
	function firstName(){
		  return 'Alex';
	}
	*/
	
	/*  the fourth example
	      function fullName($firstName, $lastName){
		  return "{$firstName} {$lastName}";	  
	  }
	  
	  $firstName = 'Alex';
	  $lastName = 'Garrett';
	  
	  $fullName = fullName($firstName, $lastName);

    echo $fullName;	
*/

/* the fifth example
      	  function fullName($firstName, $lastName, $seperator = ' '){
		  return "{$firstName}{$seperator}{$lastName}";	  
	  }

    $fullName = fullName('Alex', 'Garrett', '_');

       	echo $fullName;
*/

	/*
     $fullName = function ($firstName, $lastName, $seperator = ' '){
		 return "{$firstName}{$seperator}{$lastName}";
	 };
	 
	 echo $fullName('Alex', 'Garrett');
	*/


	/* the fifth example
     echo $fullName('Alex', 'Garrett');

   $fullName = function ($firstName, $lastName, $seperator = ' '){
	    return "{$firstName}{$separator}{$lastName}";
   }	 
	 */
	 
	 echo fullName('Alex', 'Garrett');
	 
	 function fullName($firstName, $lastName)
	 {
		 return "{$firstName} {$lastName}";
	 }
	 


?>