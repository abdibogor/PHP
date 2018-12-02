<?php

		$dayOfWeek = 4;
		
		if ($dayOfWeek == 1) {
			 echo 'It is Monday.';
		} /*else {
			echo 'It is not Monday.';
		}*/ elseif($dayOfWeek == 2){
			echo 'It is Tuesday.';
		} elseif ($dayOfWeek == 3){
			echo 'It is Wednesday.';
		} else {
			  echo 'That is not a valid day.';
		}
		
		
		echo '<br>';
		
		$dayOfWeek = 1;
		
		$daysOfWeek = [
		    1 => 'Monday',
			2 => 'Tuesday',
			3 => 'Wednesday',
			4 => 'Thursday',
		];
		
		//var_dump($dayOfWeek);
		
		//var_dump(array_keys($dayOfWeek));
		
		if (in_array($dayOfWeek, array_keys($daysOfWeek))){
		    echo $daysOfWeek[$dayOfWeek];
		} else {
			echo 'That is not a valid way.';
		}
		
		echo '<br>';
		
		$name = 'Alex';
		
		if ($name){
			echo 'Your name is '. $name;
		}
		
		echo '<br>';
		
		$name = 'Alexandre James Garrett';
		
		if ($name){
			echo 'Your name is '. $name;
			
			if(strlen($name) > 10){
				echo ' Oh, and you have a very long name.';
			}		
		}
		
		echo '<br>';
		
		$name = 'Alexander James Garrett';
		
		if (!$name){
			return;
		}
		
		//echo 'Hello';
		
		echo 'Your name is ' . $name . '.';
		
		if (strlen($name) > 10){
			echo 'Oh, and you have a long name.';
		} 

		echo '<br>';
		
		if(true){
			echo 'This will always be run.';
		}
?>