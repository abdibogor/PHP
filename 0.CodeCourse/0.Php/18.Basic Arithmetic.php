<?php

  /* first example
      $views = 0;	   
	   $views = $views = 5.5;   
	   $views = $views = 1;
	   echo $views;
  */

    $totalLessons = 30;
	$completedLessons = 7;
	
	$percentageComplete = ($completedLessons / $totalLessons) * 100;
	$percentageComplete = number_format($percentageComplete, 2);
	
	/* the same example
	$percentageComplete = (number_foramt(($completedLessons / $totalLessons) * 100);
	*/
	
	echo "You've completed {$percentageComplete}% of this course!";

	  echo '<br>';
	
	  $balance = 500;
	  $cost = 25;
	  
	  $balance = $balance - $cost;
	  
	  echo $balance;
	  
	  echo '<br>';
	  
	  $views = 0;
	  $views++;
	  
	  echo $views;
	  
	   echo '<br>';
	   
	  $points = 0;
	  $points += 10;
	  $points -= 2;
	  
	  echo $points;
	  
	  echo '<br>';
	  
	  $a = 10;
	  $b = 8;
	  
	  echo $a % $b;
	  
	  echo'<br>';
	  
	  $rows = 10;
	  
	  for($row = 1; $row <= $rows; $row++){
		  //echo '1<br>';
		  if ($row % 2 === 0){
			  echo 'Even';
		  } else {
			  echo 'Odd';
		  }
	  }
	  
	  echo '<br>';
	  
	  $a = 10;
	  
	  echo $a ** 2; //10*10=100
	  
?>