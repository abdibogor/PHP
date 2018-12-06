<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
</head>
<body>

		 <?php
		 	  function division($dividend, $divisor)
		 	  {
		 	  	$quotient=round($dividend/$divisor,1);
		 	  	$remainder=$dividend%$divisor;
		 	  	return array($quotient, $remainder);
		 	  }
		 	  $my_arr=division(63,5);
		 	  echo "Quotient: " . $my_arr[0]  . "<br />";
		 	  echo "Remainder: " . $my_arr[1] . "<br />";

		 ?>

</body>
</html> 

