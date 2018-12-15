<?php

    switch(3){
		 case 1:
			 echo 'The value is one.';
			 break;
		 case 2:
		    echo 'The value is one.';
		    break;
		 default:
			 echo 'The value is unknown.';
			 break;
	}
	
	echo '<br>';
	
	$weather = 'cloudy';
	$color = null;
	
	switch (true){
		case $weather == 'sunny';
		$color = 'blue';
		break;
		
		case $weather == 'cloudy';
		$color = 'grey';
		break;
	}

	echo $color;
	
?>