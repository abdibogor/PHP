<?php

    $config = [
	   'seperator' => '_',
	];
	
	$fullName = function ($firstName, $lastName) use ($config) {		
		return "{$firstName}{$config['seperator']}{$lastName}";
	};
	
	echo $fullName('Alex', 'Garrett');

?>