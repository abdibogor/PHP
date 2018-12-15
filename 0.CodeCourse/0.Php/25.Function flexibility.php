<?php

      function fullName($firstName, $lastName = null, $seperator = '_')
	  {
		  if (trim($firstName) === ''){
			  return;
		  }
		  
		  if ($lastName === null){
			  return $firstName;
		  }
		  
		  /*
		  return 'Alex';
		  
		  echo 'Hello.';
		  */
		  return "{$firstName}{$seperator}{$lastName}";
	  }
	  
	  //echo fullName('Alex', 'Garrett');
	  var_dump(fullName('Alex', 'Garrett'));

?>