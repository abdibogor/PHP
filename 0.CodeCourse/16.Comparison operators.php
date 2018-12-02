<?php
     
	 /*
	 $uploaded = true;
	 
	  if ($uploaded == true) {
		  echo 'Uploaded';
	  } 
*/

/*
    $tablesAvailable = false;
	
	if($tablesAvailable !== true) {
		echo 'Book a table';
	}
*/
     //var_dump((int) '1alex');

	 /*
	 $roomsRequest = 4;
	 $roomsAvailable = 3;
	 
	 if($roomsRequest > $roomsAvailable){
		 echo 'Not enough rooms.';
	 }
	 */
	 
	 $maxRoomsAllowed = 5;
	 $roomsRequested = 2;
	 $roomsAvailable = 20;
	 
	 if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
		 echo 'Please choose less rooms.';
	 } else {
		 echo 'Your booking is complete.';
	 }
	 
	 
?>