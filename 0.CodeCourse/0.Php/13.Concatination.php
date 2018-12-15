<?php

		$weather = 'sunny';
		
		//echo 'The current weather is ' . $weather;
		$degrees = 30.5;
		
	/* the same example la derniere
		$status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degress';
		*/
		
		$status = "The current weather is {$weather} and it's {$degrees} degress";
		
		$status = "The current weather is $weather and it's $degrees * degress";
		
		echo $status;
		
		//var_dump($status);
		
		echo '<br>';
		
		echo 'My name ', 'Alex';
		
		echo '<br>';
		/* in this example
		$name = 'alex';
		echo 'My name ', $name;
		*/
		
		$name = 'ali';
		$text = 'My name ' . $name;
		echo $text;
?>